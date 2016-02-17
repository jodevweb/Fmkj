# Fmkj



Micro Framework MVC



# Install

	git clone git://github.com/jodevweb/Fmkj.git

# Doc


###
 Parameters

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




### Use Query builder

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
            if (!empty($Data['id'])) {
                return true;
            }
        }

        if ($Request->isGet()) {
            if (!empty($Data['id'])) {
                return true;
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

### Use Bootstrap with Twig

Dir : App/Views;

Example template :

```
{% extends "layout.twig" %}

{% block title %}{{ app_name }}{% endblock %}

{% block head %}
    {{ parent() }}
{% endblock %}

{% block body %}
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">{{ app_name }}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Sign in</button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique. <strong>{{ date }}</strong></p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
</div>
<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            Hello..
        </div>
    </div>

    <hr>
    {% endblock %}

    {% block footer %}
        {{ parent() }}
    {% endblock %}
```

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