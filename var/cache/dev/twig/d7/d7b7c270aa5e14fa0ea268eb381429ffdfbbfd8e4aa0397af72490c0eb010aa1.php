<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_4ab0d1599d6fabc4058bc359f1f626bef78779911e18157e59cabab6d769661f extends Twig_Template
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
        $__internal_b36e47fc896c86ba1fe931463f486e41ef4afa4bd70c859672a68c388f38b9dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b36e47fc896c86ba1fe931463f486e41ef4afa4bd70c859672a68c388f38b9dd->enter($__internal_b36e47fc896c86ba1fe931463f486e41ef4afa4bd70c859672a68c388f38b9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_90d72858eec8ce27c46d35c5a0334c738e175cbac9c96138a45059887dfe63a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d72858eec8ce27c46d35c5a0334c738e175cbac9c96138a45059887dfe63a5->enter($__internal_90d72858eec8ce27c46d35c5a0334c738e175cbac9c96138a45059887dfe63a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_b36e47fc896c86ba1fe931463f486e41ef4afa4bd70c859672a68c388f38b9dd->leave($__internal_b36e47fc896c86ba1fe931463f486e41ef4afa4bd70c859672a68c388f38b9dd_prof);

        
        $__internal_90d72858eec8ce27c46d35c5a0334c738e175cbac9c96138a45059887dfe63a5->leave($__internal_90d72858eec8ce27c46d35c5a0334c738e175cbac9c96138a45059887dfe63a5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d7ec5bd288117a94bf920ce2e44cccaae7e5534c8269eb27051df87c8334cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7ec5bd288117a94bf920ce2e44cccaae7e5534c8269eb27051df87c8334cbd->enter($__internal_4d7ec5bd288117a94bf920ce2e44cccaae7e5534c8269eb27051df87c8334cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f301a8babf11dc5a6c8072d5d01819b6b4360e818d23024718c6ae4d49ea2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f301a8babf11dc5a6c8072d5d01819b6b4360e818d23024718c6ae4d49ea2bb->enter($__internal_6f301a8babf11dc5a6c8072d5d01819b6b4360e818d23024718c6ae4d49ea2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f301a8babf11dc5a6c8072d5d01819b6b4360e818d23024718c6ae4d49ea2bb->leave($__internal_6f301a8babf11dc5a6c8072d5d01819b6b4360e818d23024718c6ae4d49ea2bb_prof);

        
        $__internal_4d7ec5bd288117a94bf920ce2e44cccaae7e5534c8269eb27051df87c8334cbd->leave($__internal_4d7ec5bd288117a94bf920ce2e44cccaae7e5534c8269eb27051df87c8334cbd_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_fdaeab6dc5779e71fda9ce8b6e813cc6e7c0dc75641900a4023e7f1e27d9ce8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdaeab6dc5779e71fda9ce8b6e813cc6e7c0dc75641900a4023e7f1e27d9ce8d->enter($__internal_fdaeab6dc5779e71fda9ce8b6e813cc6e7c0dc75641900a4023e7f1e27d9ce8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b6b54f0d088ff582a87719fc29c3be7b7cf1a620ab756a54a415166b19c5d74c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b54f0d088ff582a87719fc29c3be7b7cf1a620ab756a54a415166b19c5d74c->enter($__internal_b6b54f0d088ff582a87719fc29c3be7b7cf1a620ab756a54a415166b19c5d74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b6b54f0d088ff582a87719fc29c3be7b7cf1a620ab756a54a415166b19c5d74c->leave($__internal_b6b54f0d088ff582a87719fc29c3be7b7cf1a620ab756a54a415166b19c5d74c_prof);

        
        $__internal_fdaeab6dc5779e71fda9ce8b6e813cc6e7c0dc75641900a4023e7f1e27d9ce8d->leave($__internal_fdaeab6dc5779e71fda9ce8b6e813cc6e7c0dc75641900a4023e7f1e27d9ce8d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5363ab9b66d4345ed7118e4456088ca8611bbbcb38965e9e84f4be34e6486f95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5363ab9b66d4345ed7118e4456088ca8611bbbcb38965e9e84f4be34e6486f95->enter($__internal_5363ab9b66d4345ed7118e4456088ca8611bbbcb38965e9e84f4be34e6486f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7d9120ea347f8b7af1672547b8a609eaee80a3ef48fcb5d72451c908f01dd0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d9120ea347f8b7af1672547b8a609eaee80a3ef48fcb5d72451c908f01dd0d->enter($__internal_d7d9120ea347f8b7af1672547b8a609eaee80a3ef48fcb5d72451c908f01dd0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d7d9120ea347f8b7af1672547b8a609eaee80a3ef48fcb5d72451c908f01dd0d->leave($__internal_d7d9120ea347f8b7af1672547b8a609eaee80a3ef48fcb5d72451c908f01dd0d_prof);

        
        $__internal_5363ab9b66d4345ed7118e4456088ca8611bbbcb38965e9e84f4be34e6486f95->leave($__internal_5363ab9b66d4345ed7118e4456088ca8611bbbcb38965e9e84f4be34e6486f95_prof);

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
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
