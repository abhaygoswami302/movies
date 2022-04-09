<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* movies/show.html.twig */
class __TwigTemplate_5206f73212a4961988672ac544fb9e1492a1bc1b6d4d35d23e118fda0a580534 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "./base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movies/show.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "movies/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"sm:w-3/5 w-4/5 mx-auto\">
        <h1 class=\"pt-20 sm:text-5xl md:text-7xl text-4xl font-bold text-center\">
            ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "
        </h1>

        <div class=\"py-10 text-center\">
            <div class=\"inline-block sm:pt-1\">
                <h2 class=\"font-bold\">
                    Created by: Code With Dary
                </h2>

                <p class=\"text-sm text-gray-600\">
                    28-01-2022 4 min. read
                </p>
            </div>
        </div>

        <img
            src=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 22, $this->source); })()), "imagePath", [], "any", false, false, false, 22), "html", null, true);
        echo "\"
            class=\"rounded-xl w-full shadow-xl\"
            alt=\"Icon of Code With Dary\"
        />

        <p class=\"text-xl py-6\">
            ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), "html", null, true);
        echo "
        </p>

        ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) {
            // line 32
            echo "            <a 
                href=\"/movies/edit/";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\"
                class=\"bg-green-500 font-bold py-2 px-4 rounded transition-all hover:bg-green-300\">
                Edit Movie
            </a>

            <a 
                href=\"/movies/delete/";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\"
                class=\"bg-red-500 font-bold py-2 px-4 ml-6 rounded transition-all hover:bg-red-300\">
                Delete Movie
            </a>
        ";
        }
        // line 44
        echo "        

    
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "movies/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 44,  111 => 39,  102 => 33,  99 => 32,  97 => 31,  91 => 28,  82 => 22,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"./base.html.twig\" %}

{% block body %}
    <div class=\"sm:w-3/5 w-4/5 mx-auto\">
        <h1 class=\"pt-20 sm:text-5xl md:text-7xl text-4xl font-bold text-center\">
            {{ movie.title }}
        </h1>

        <div class=\"py-10 text-center\">
            <div class=\"inline-block sm:pt-1\">
                <h2 class=\"font-bold\">
                    Created by: Code With Dary
                </h2>

                <p class=\"text-sm text-gray-600\">
                    28-01-2022 4 min. read
                </p>
            </div>
        </div>

        <img
            src=\"{{ movie.imagePath }}\"
            class=\"rounded-xl w-full shadow-xl\"
            alt=\"Icon of Code With Dary\"
        />

        <p class=\"text-xl py-6\">
            {{ movie.description }}
        </p>

        {% if app.user %}
            <a 
                href=\"/movies/edit/{{ movie.id }}\"
                class=\"bg-green-500 font-bold py-2 px-4 rounded transition-all hover:bg-green-300\">
                Edit Movie
            </a>

            <a 
                href=\"/movies/delete/{{ movie.id }}\"
                class=\"bg-red-500 font-bold py-2 px-4 ml-6 rounded transition-all hover:bg-red-300\">
                Delete Movie
            </a>
        {% endif %}
        

    
    </div>
{% endblock %}", "movies/show.html.twig", "C:\\xampp\\htdocs\\movies\\templates\\movies\\show.html.twig");
    }
}
