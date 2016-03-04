# Fmkj



Micro Framework MVC



# Install

	git clone git://github.com/jodevweb/Fmkj.git

# Doc



### Parameters

Dir Config/;

File : parameters

configure your application by changing the name of your project and the login information to your database.

Attention, default is dev environment if you want to change the environment in production, replacing it :

$env                = 'dev';

$env                = 'prod';


### Create a controller



Dir : App/Controllers;

File : YourController




##### Create a route method

    public function helloRoute($param)
    {
        $twig = Base::view();

        echo $twig->render('hello.twig', array(
            'param' => $param
         ));
    }

##### Create a simple method

    public function hello($param)
    {
        
    }

### Create a route



Dir : App/Route;

File : route.php



        $load->Route('/my-route/:param1/:param2', array('controller' => 'YourController', 'action' => 'YourMethod'));




### Query builder

Use : use Sys\Controllers\Datadon;

Example :

```
    public function MyFirstQuery()
    {
        $Datadon = new Datadon();

        $Articles = $Datadon->findAll('articles', array(
            'select' => array('*'),
            'join' => array(
                'user',
                'left',
                'user.id = articles.user_id'
            )
        ));

    }
```

### Request

Use : use Sys\Controllers\Request;

Example : 

```
    public function MyFirstRequest()
    {
        $Request = new Request();
		$Data = $Request->request();
        
        if ($Request->isPost()) {
            if ($Request->validate(['param1', 'param2'])) {
                return $Data['param1'];
            }
        }

        if ($Request->isGet()) {
            if ($Request->validate(['param1', 'param2'])) {
                return $Data['param1'];
            }
        }

    }
```

### Create a view in controller (with Twig) :



insert in Controller



        $twig = Base::view();

        echo $twig->render('yourview.twig', array(
            'param' => $param
        ));

#### Global Twig

app_name variable = {{ app_name }} (project name)

path variable (it's a array) = {{ path.[views,url,bootstrap] }}

route viarable (it's a array) = {{ route.only }} (others are ongoing)

### FormBuilder

#### Controller

Example : 

```
        $form = new Form();

        $MyForm = $form->startForm('result.php', 'post', 'demoForm',
                array('class'=>'demoForm', 'onsubmit'=>'return checkBeforeSubmit(this)') ) . PHP_EOL .

            $form->startTag('fieldset') . PHP_EOL .
            $form->startTag('legend') . 'Example Form' . $form->endTag() . PHP_EOL .

            $form->startTag('p') .

            $form->addLabelFor('firstName', 'First Name: ') .

            $form->addInput('text', 'firstName', '', array('id'=>'firstName', 'size'=>16, 'required'=>true) ) .
            $form->endTag('p') . PHP_EOL .
            $form->endForm();
```

#### View

{{ form|raw }}