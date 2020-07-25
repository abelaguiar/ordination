# Ordination

Adiciona ao model Eloquent o recurso de ordenar consulta por models relacionados.

Exemplo:

```php
$clientes = Cliente::orderBy('pessoa.nome', 'desc')->get();
```

### Como utilizar

Adicione a library

```sh
$ composer require abelaguiar/ordination
```

Adicione o ServiceProvider no arquivo `config/app.php`

```php
// file START ommited
    'providers' => [
        // other providers ommited
        \AbelAguiar\Ordination\OrdinationServiceProvider::class,
    ],
    
    'aliases' => [
        // other aliases ommited
        'Order' => AbelAguiar\Ordination\Facade::class,
    ],
    
// file END ommited
```

Adicione a trait `OrdinationTrait` no model:

```php
use AbelAguiar\Ordination\OrdinarionTrait;

class Cliente extends Model{

  use OrdinationTrait;
  
  /*
   * Belong To Pessoa
   */
  public function pessoa(){
      return $this->belongsTo(Pessoa::class);
  }

}
```

### Order::url()

Utilize o helper na sua view para gerar um link de ordenação:

```html
<thead>
  <tr>
      <th><a href="{{Order::url('pessoa.documento')}}">Documento</a></th>
      <th><a href="{{Order::url('pessoa.nome')}}">Cliente</a></th>
  </tr>
</thead>
```

### License

The MIT License (MIT)
