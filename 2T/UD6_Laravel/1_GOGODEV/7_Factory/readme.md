
# 7 - Seeders, Factories y Faker en Laravel

## Índice

1. [Introducción](https://chatgpt.com/c/679cef7d-6b3c-8008-9838-60f501dbd15a#introducci%C3%B3n)
2. [Configuración del Proyecto](https://chatgpt.com/c/679cef7d-6b3c-8008-9838-60f501dbd15a#configuraci%C3%B3n-del-proyecto)
3. [Seeders](https://chatgpt.com/c/679cef7d-6b3c-8008-9838-60f501dbd15a#seeders)
4. [Factories](https://chatgpt.com/c/679cef7d-6b3c-8008-9838-60f501dbd15a#factories)
5. [Faker](https://chatgpt.com/c/679cef7d-6b3c-8008-9838-60f501dbd15a#faker)
6. [Conclusiones](https://chatgpt.com/c/679cef7d-6b3c-8008-9838-60f501dbd15a#conclusiones)

---

## 1. Introducción

Para manejar bases de datos en Laravel, usamos migraciones para estructurarla, pero necesitamos poblarla con datos reales o de prueba. Ahí entran en juego:

* **Seeders** : Insertan datos esenciales en la base de datos.
* **Factories** : Generan datos aleatorios en grandes cantidades.
* **Faker** : Crea datos ficticios realistas para pruebas.

El objetivo es que, al instalar la aplicación, al menos haya datos mínimos como usuarios, productos y categorías.

---

## 2. Configuración del Proyecto

Creamos un nuevo proyecto Laravel:

```sh
composer create-project laravel/laravel databases
cd databases
```

Si usamos MySQL, configuramos `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=databases
DB_USERNAME=root
DB_PASSWORD=root
```

Migramos la base de datos:

```sh
php artisan migrate
```

Ahora, creamos un modelo para trabajar:

```sh
php artisan make:model Product --migration
```

En `app/Models/Product.php`, habilitamos el uso de factories:

```php
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model {
    use HasFactory;
    protected $guarded = [];
}
```

Definimos la migración en `database/migrations`:

```php
Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('name', 50);
    $table->string('short_description', 100);
    $table->text('description', 500);
    $table->float('price')->default(20);
    $table->timestamps();
});
```

---

## 3. Seeders

Creamos un seeder:

```sh
php artisan make:seeder ProductSeeder
```

En `database/seeders/ProductSeeder.php`:

```php
public function run(): void {
    Product::create([
        'name' => 'Ejemplo',
        'short_description' => 'Producto de prueba',
        'description' => 'Descripción detallada',
        'price' => 50
    ]);
}
```

Añadimos el seeder al `DatabaseSeeder.php`:

```php
public function run(): void {
    $this->call([
        ProductSeeder::class
    ]);
}
```

Ejecutamos el seeder:

```sh
php artisan db:seed
```

Para ejecutar un seeder específico:

```sh
php artisan db:seed --class=ProductSeeder
```

---

## 4. Factories

Los factories generan grandes volúmenes de datos de prueba. Creamos un factory:

```sh
php artisan make:factory ProductFactory
```

Editamos `database/factories/ProductFactory.php`:

```php
public function definition(): array {
    return [
        'name' => Str::random(25),
        'short_description' => Str::random(45),
        'description' => Str::random(150),
        'price' => random_int(1, 125),
    ];
}
```

Lo usamos en `ProductSeeder.php`:

```php
public function run(): void {
    Product::factory()->count(150)->create();
}
```

Ejecutamos el seeder para poblar la base de datos:

```sh
php artisan db:seed
```

---

## 5. Faker

Para que los datos de prueba sean más realistas, usamos **Faker** en `ProductFactory.php`:

```php
public function definition(): array {
    return [
        'name' => fake()->name,
        'short_description' => fake()->sentence,
        'description' => fake()->paragraph(3),
        'price' => fake()->numberBetween(1, 125),
    ];
}
```

Borramos y migramos de nuevo:

```sh
php artisan migrate:rollback
php artisan migrate
php artisan db:seed
```
