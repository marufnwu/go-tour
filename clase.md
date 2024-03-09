para crear un nuevo modelo para base de datos:

    //php artisan make:model NOMBRE_DE_LA_TABLA_EN_SINGULAR -m

creara nuevo modelo de tabla, el modelo estara en databases/migrations/ y contendra el nombre puesto al crear el modelo

cada $table-> que esta en schema::up() significa una columna.

*se debe tener configurada la base de datos en .env

luego para migrar las tablas creadas se usa php artisan migrate, pasara las tablas a la base de datos

si se quire deshacer el ultimo cambio se usa php artisan migrate:rollback

ahora se debe unir el controlador con la vista (como unir la base de datos con el frontend)

se crea el controlador con php artisan make:controller Nombre_del_controlador

este se creara en app/http/controllers

en esta se crearan las funciones para hacer los cruds de las respectivas tablas, se deben recomienda seguir las siguientes convenciones:    
    index para mostrar todos los datos 
    store para guardar una fila
    update para actualizar un fila
    destroy para eliminar una fila
    edit para mostrar formulario de edicion (?)

dentro de 
class nombre extends nombre {
    public function store(Request $Request){

    $Request->validate([
         'title' => 'required|min:3'
         'password' => 'required|min4'
        ])
    }
}

despues de $Request->van ir una serie de condiciones que se deben cumplir, tal como validate, que validara los campos como si fueran if, en el caso de arriba se indica que se debe tener un titulo y  contraseña obligatoriamente y el la longitud minima debe ser de 3 caracteres.

sluego e tiene que conectar con el modelo, para eso se usa o importa al controlador, se hace fuera de la clase (arriba) con: 
    use App/Model/nombre_modelo

luego se crean objetos donde se asignan los valores, va dentro de la funcion

    class testController extends Controller
{
    public function store(Request $Request){

        $Request->validate([
            'title' => 'required|min:8',  // se valida cada campo
            'password'=> 'required|min:8'
        ])

        $test = new form_test; // se crea el bojeto
        $test->title = $Request->title;     //asignando valores
        $test->password = $Request->password;
        $test->save();  // se guardan los valores

        return redirect()->route('ruta')->with('success','nombre de mensjede exito');

    }
}

por ultimo se debe configurar la ruta en routes/web


//////////////////-------------CRUD LARAVEL---------------////////////////////

Despues de instalar laravel, 
para crear un controlado modelo y vista se corre comando 

    php artisan make::model NombreSingularPegado -mcr

se configura primero en migrations el archivo que se creo 

    dentro de up se ponen todas las tablas verificando el tipo de dato que se desea usar.

luego se configura la vista, se recomienda crear una carpeta para cada vista, en este caso una carpeta va a tener 3 archivos: 
    edit
    create
    index

luego se configuran las rutas, se copia el modelo route

    Route::get('/', function () {
        return view('vista');
    });

este se modifica para acceder al index de la carpeta creada

     Route::get('/carpeta', function () {
        return view('carpeta.index');
    });

para ver los datos que se estan cargando en submit return response()->json($user);
