<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_da80973a2c44d4696ffe9ac1431d06e56f1ba6ec368007a80ffde6ad1a8dfbed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac5720ff20392b2d23af1088f12bd85832d229f3870ffaec6e4be59b5dba708f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac5720ff20392b2d23af1088f12bd85832d229f3870ffaec6e4be59b5dba708f->enter($__internal_ac5720ff20392b2d23af1088f12bd85832d229f3870ffaec6e4be59b5dba708f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0060f59af4723c934eb1fd72adae280329ecf7407759b36dc0185a6d1c487976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0060f59af4723c934eb1fd72adae280329ecf7407759b36dc0185a6d1c487976->enter($__internal_0060f59af4723c934eb1fd72adae280329ecf7407759b36dc0185a6d1c487976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_ac5720ff20392b2d23af1088f12bd85832d229f3870ffaec6e4be59b5dba708f->leave($__internal_ac5720ff20392b2d23af1088f12bd85832d229f3870ffaec6e4be59b5dba708f_prof);

        
        $__internal_0060f59af4723c934eb1fd72adae280329ecf7407759b36dc0185a6d1c487976->leave($__internal_0060f59af4723c934eb1fd72adae280329ecf7407759b36dc0185a6d1c487976_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5bddca469e64b3dfea023afec73074103c5915f8f54d92baf66c5f30a5e5a26e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bddca469e64b3dfea023afec73074103c5915f8f54d92baf66c5f30a5e5a26e->enter($__internal_5bddca469e64b3dfea023afec73074103c5915f8f54d92baf66c5f30a5e5a26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c0852c3916dcea887e701d255a00f832892f4ae6f802737b8b1b7dcb4edf2d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0852c3916dcea887e701d255a00f832892f4ae6f802737b8b1b7dcb4edf2d4f->enter($__internal_c0852c3916dcea887e701d255a00f832892f4ae6f802737b8b1b7dcb4edf2d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c0852c3916dcea887e701d255a00f832892f4ae6f802737b8b1b7dcb4edf2d4f->leave($__internal_c0852c3916dcea887e701d255a00f832892f4ae6f802737b8b1b7dcb4edf2d4f_prof);

        
        $__internal_5bddca469e64b3dfea023afec73074103c5915f8f54d92baf66c5f30a5e5a26e->leave($__internal_5bddca469e64b3dfea023afec73074103c5915f8f54d92baf66c5f30a5e5a26e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a8a9707d1048430591946c20022fda049f84357ad41f05478eda780de4475e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a9707d1048430591946c20022fda049f84357ad41f05478eda780de4475e50->enter($__internal_a8a9707d1048430591946c20022fda049f84357ad41f05478eda780de4475e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fd71c1c85dc440c95c78fc3a072f6854a21ac68123120e0ec33f361dee87bd88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd71c1c85dc440c95c78fc3a072f6854a21ac68123120e0ec33f361dee87bd88->enter($__internal_fd71c1c85dc440c95c78fc3a072f6854a21ac68123120e0ec33f361dee87bd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fd71c1c85dc440c95c78fc3a072f6854a21ac68123120e0ec33f361dee87bd88->leave($__internal_fd71c1c85dc440c95c78fc3a072f6854a21ac68123120e0ec33f361dee87bd88_prof);

        
        $__internal_a8a9707d1048430591946c20022fda049f84357ad41f05478eda780de4475e50->leave($__internal_a8a9707d1048430591946c20022fda049f84357ad41f05478eda780de4475e50_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_723091054a408c2d6174c95056e3d55a67d78b0ed8aa9e2fb91ee16f47549d39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_723091054a408c2d6174c95056e3d55a67d78b0ed8aa9e2fb91ee16f47549d39->enter($__internal_723091054a408c2d6174c95056e3d55a67d78b0ed8aa9e2fb91ee16f47549d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0543d37f44a98eb96192e0652aab0d57a03e6b46a85f0fbfd10f95c7355b99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0543d37f44a98eb96192e0652aab0d57a03e6b46a85f0fbfd10f95c7355b99c->enter($__internal_d0543d37f44a98eb96192e0652aab0d57a03e6b46a85f0fbfd10f95c7355b99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d0543d37f44a98eb96192e0652aab0d57a03e6b46a85f0fbfd10f95c7355b99c->leave($__internal_d0543d37f44a98eb96192e0652aab0d57a03e6b46a85f0fbfd10f95c7355b99c_prof);

        
        $__internal_723091054a408c2d6174c95056e3d55a67d78b0ed8aa9e2fb91ee16f47549d39->leave($__internal_723091054a408c2d6174c95056e3d55a67d78b0ed8aa9e2fb91ee16f47549d39_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
