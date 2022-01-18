<?php

declare(strict_types=1);

namespace Holded\SDK\Clients;

use Holded\SDK\DTOs\Product\Product;
use Holded\SDK\Repositories\Products\ProductRepository;
use Holded\SDK\Services\HTTP\Client;

class ProductsClient
{
    /** @var ProductRepository */
    private $productRepository;

    public function __construct(Client $client)
    {
        $this->productRepository = new ProductRepository($client);
    }

    public function updateProduct(Product $product): bool
    {
        // Try two times
        $wasUpdated = $this->productRepository->update($product);
        if ($wasUpdated) {
            return true;
        }

        $wasUpdated = $this->productRepository->update($product);
        if ($wasUpdated) {
            return true;
        }

        return false;
    }

    public function deleteProduct(Product $product): bool
    {
        if (!$product->sku) {
            return false;
        }

        $this->productRepository->delete($product);

        return true;
    }

    public function updateProductStock(Product $product): bool
    {
        return $this->productRepository->updateStock($product);
    }
}
