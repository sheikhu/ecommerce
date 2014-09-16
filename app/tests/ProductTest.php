<?php

class ProductTest extends TestCase {


    public function setUp()
    {
        parent::setUp();
        Artisan::call('migrate', ['seed']);
        Eloquent::unguard();

    }

    protected function tearDown()
    {
        parent::tearDown();
        Artisan::call('migrate:reset');
    }

	public function testCreateProduct()
	{
		$product = new Product;

        $data = [
            'title' =>  'foo bar',
            'description' => 'bar',
            'price' => 1000,
            'available' => true,
            'category_id'   =>  1
        ];

        $product->fill($data);

        $product->save();

        $this->assertEquals(1, Product::count());
        $this->assertEquals('foo-bar', $product->slug);

	}

}
