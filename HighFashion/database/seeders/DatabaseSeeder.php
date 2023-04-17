<?php

namespace Database\Seeders;

use App\Models\Products;
use App\Models\Type;
use App\Models\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'Admin@trilhas-1.com',
            'password' => Hash::make('12345678'),
        ]);
        Type::create([
            'categories' => 'Calça',
        ]);
        Type::create([
            'categories' => 'Blusa',
        ]);
        Type::create([
            'categories' => 'Bermuda',
        ]);
        Type::create([
            'categories' => 'Conjunto',
        ]);
        Type::create([
            'categories' => 'macacoes',
        ]);
        Type::create([
            'categories' => 'jaqueta',
        ]);
        Type::create([
            'categories' => 'coletes',
        ]);
        Type::create([
            'categories' => 'acessorios',
        ]);
        Type::create([
            'categories' => 'vestidos',
        ]);

        collection::create([
            'description_collection' => 'primavera',
        ]);
        collection::create([
            'description_collection' => 'verao',
        ]);
        collection::create([
            'description_collection' => 'outono',
        ]);
        collection::create([
            'description_collection' => 'inverno',
        ]);

        Products::create([
            'description' => 'Blusa',
            'value' => '109.80',
            'reference' => '1234',
            'code' => '1234',
            'type_id' => '1',
            'collection_id' => '1',
            'patch' => '/img/products/blusa1.jpg',
        ]);
        Products::create([
            'description' => 'Blusa',
            'value' => '89.90',
            'reference' => '1223',
            'code' => '1165',
            'type_id' => '1',
            'collection_id' => '4',
            'patch' => '/img/products/blusa2.jpg',
        ]);
        Products::create([
            'description' => 'Blusa HILESE',
            'value' => '100.00',
            'reference' => '3265',
            'code' => '3355',
            'type_id' => '1',
            'collection_id' => '4',
            'patch' => '/img/products/blusa3.jpg',
        ]);
        Products::create([
            'description' => 'Conjunto Amore',
            'value' => '45.90',
            'reference' => '1223',
            'code' => '1165',
            'type_id' => '1',
            'collection_id' => '1',
            'patch' => '/img/products/blusa4.jpg',
        ]);
        Products::create([
            'description' => 'Blusa',
            'value' => '45.90',
            'reference' => '1223',
            'code' => '1165',
            'type_id' => '1',
            'collection_id' => '4',
            'patch' => '/img/products/blusa5.jpg',
        ]);
        Products::create([
            'description' => 'Bolsa',
            'value' => '129.90',
            'reference' => '5589',
            'code' => '3698',
            'type_id' => '2',
            'collection_id' => '4',
            'patch' => '/img/products/bolsa1.jpg',
        ]);
        Products::create([
            'description' => 'Calça ',
            'value' => '59.90',
            'reference' => '8974',
            'code' => '9856',
            'type_id' => '2',
            'collection_id' => '1',
            'patch' => '/img/products/calca1.jpg',
        ]);
        Products::create([
            'description' => 'Calça',
            'value' => '69.90',
            'reference' => '2288',
            'code' => '3366',
            'type_id' => '2',
            'collection_id' => '1',
            'patch' => '/img/products/calca2.jpg',
        ]);
        Products::create([
            'description' => 'Calça',
            'value' => '119.90',
            'reference' => '9988',
            'code' => '3320',
            'type_id' => '2',
            'collection_id' => '4',
            'patch' => '/img/products/calca4.jpg',
        ]);
        Products::create([
            'description' => 'Calça',
            'value' => '35.90',
            'reference' => '5555',
            'code' => '3699',
            'type_id' => '2',
            'collection_id' => '2',
            'patch' => '/img/products/calca5.jpg',
        ]);

        Products::create([
            'description' => 'Chinelo',
            'value' => '69.80',
            'reference' => '5789',
            'code' => '3898',
            'type_id' => '3',
            'collection_id' => '2',
            'patch' => '/img/products/chinelo1.jpg',
        ]);
        Products::create([
            'description' => 'Colete',
            'value' => '69.80',
            'reference' => '5783',
            'code' => '3890',
            'type_id' => '3',
            'collection_id' => '2',
            'patch' => '/img/products/colete1.jpg',
        ]);
        Products::create([
            'description' => 'Colete',
            'value' => '29.80',
            'reference' => '5785',
            'code' => '3868',
            'type_id' => '3',
            'collection_id' => '1',
            'patch' => '/img/products/colete2.jpg',
        ]);
        Products::create([
            'description' => 'Colete',
            'value' => '99.90',
            'reference' => '3321',
            'code' => '1213',
            'type_id' => '4',
            'collection_id' => '2',
            'patch' => '/img/products/colete3.jpg',
        ]);
        Products::create([
            'description' => 'Conjuto ',
            'value' => '129.90',
            'reference' => '3322',
            'code' => '1214',
            'type_id' => '4',
            'collection_id' => '1',
            'patch' => '/img/products/conjunto1.jpg',
        ]);
        Products::create([
            'description' => 'Conjuto ',
            'value' => '129.90',
            'reference' => '3325',
            'code' => '1217',
            'type_id' => '4',
            'collection_id' => '1',
            'patch' => '/img/products/conjunto2.jpg',
        ]);
        Products::create([
            'description' => 'Conjuto ',
            'value' => '99.90',
            'reference' => '33555',
            'code' => '12196',
            'type_id' => '4',
            'collection_id' => '2',
            'patch' => '/img/products/conjunto4.jpg',
        ]);
        Products::create([
            'description' => 'Conjunto',
            'value' => '99.90',
            'reference' => '335775',
            'code' => '12776',
            'type_id' => '4',
            'collection_id' => '2',
            'patch' => '/img/products/conjunto5.jpg',
        ]);
        Products::create([
            'description' => 'Blusa',
            'value' => '129.90',
            'reference' => '77555',
            'code' => '772196',
            'type_id' => '4',
            'collection_id' => '2',
            'patch' => '/img/products/deblusa3.jpg',
        ]);
        Products::create([
            'description' => 'Jaqueta',
            'value' => '139.90',
            'reference' => '33219',
            'code' => '12137',
            'type_id' => '5',
            'collection_id' => '3',
            'patch' => '/img/products/jaqueta1.jpg
            ',
        ]);
        Products::create([
            'description' => 'Jaqueta',
            'value' => '159.90',
            'reference' => '33218',
            'code' => '12138',
            'type_id' => '5',
            'collection_id' => '3',
            'patch' => '/img/products/jaqueta2.jpg',
        ]);
        Products::create([
            'description' => 'Jaqueta',
            'value' => '139.90',
            'reference' => '332199',
            'code' => '121377',
            'type_id' => '5',
            'collection_id' => '3',
            'patch' => '/img/products/jaqueta3.jpg',
        ]);
        Products::create([
            'description' => 'Macacão',
            'value' => '69.90',
            'reference' => '33879',
            'code' => '15537',
            'type_id' => '6',
            'collection_id' => '3',
            'patch' => '/img/products/macacao1.jpg',
        ]);
        Products::create([
            'description' => 'Macacão',
            'value' => '79.90',
            'reference' => '33879',
            'code' => '15537',
            'type_id' => '6',
            'collection_id' => '3',
            'patch' => '/img/products/macacao2.jpg',
        ]);
        Products::create([
            'description' => 'Jaqueta',
            'value' => '89.90',
            'reference' => '33889',
            'code' => '15587',
            'type_id' => '6',
            'collection_id' => '3',
            'patch' => '/img/products/jaqueta3.jpg',
        ]);
        Products::create([
            'description' => 'Short',
            'value' => '69.90',
            'reference' => '338793',
            'code' => '155373',
            'type_id' => '7',
            'collection_id' => '4',
            'patch' => '/img/products/short1.jpg',
        ]);
        Products::create([
            'description' => 'short',
            'value' => '59.90',
            'reference' => '33844',
            'code' => '15544',
            'type_id' => '7',
            'collection_id' => '3',
            'patch' => '/img/products/short2.jpg',
        ]);
        Products::create([
            'description' => 'Short',
            'value' => '79.90',
            'reference' => '338449',
            'code' => '155449',
            'type_id' => '7',
            'collection_id' => '3',
            'patch' => '/img/products/short3.jpg',
        ]);
        Products::create([
            'description' => 'Short',
            'value' => '39.90',
            'reference' => '33884',
            'code' => '15844',
            'type_id' => '8',
            'collection_id' => '1',
            'patch' => '/img/products/short4.jpg',
        ]);


        Products::create([
            'description' => 'Bolsa Marron Pequena',
            'value' => '79.90',
            'reference' => '3384312',
            'code' => '155123',
            'type_id' => '8',
            'collection_id' => '2',
            'patch' => '/img/products/short5.jpg',
        ]);
        Products::create([
            'description' => 'Vestido Branco',
            'value' => '89.90',
            'reference' => '338747',
            'code' => '175444',
            'type_id' => '9',
            'collection_id' => '2',
            'patch' => '/img/products/vestido1.jpg',
        ]);
        Products::create([
            'description' => 'Vestido Verde Limão',
            'value' => '99.90',
            'reference' => '338477',
            'code' => '155448',
            'type_id' => '9',
            'collection_id' => '2',
            'patch' => '/img/products/vestido2.jpg',
        ]);
        Products::create([
            'description' => 'Vestido Estampado',
            'value' => '99.90',
            'reference' => '387477',
            'code' => '155778',
            'type_id' => '9',
            'collection_id' => '2',
            'patch' => '/img/products/vestido3.jpg',
        ]);
    }
}