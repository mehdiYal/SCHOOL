<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
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
        $__internal_c84fb15a9ea8c9c98bbe053346a29c86559dac697457a7ce52af4077053db784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c84fb15a9ea8c9c98bbe053346a29c86559dac697457a7ce52af4077053db784->enter($__internal_c84fb15a9ea8c9c98bbe053346a29c86559dac697457a7ce52af4077053db784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_1f9b6ba45395393ad073a97accffd97b77d758eff5532b2d47c369709a0e6863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9b6ba45395393ad073a97accffd97b77d758eff5532b2d47c369709a0e6863->enter($__internal_1f9b6ba45395393ad073a97accffd97b77d758eff5532b2d47c369709a0e6863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_c84fb15a9ea8c9c98bbe053346a29c86559dac697457a7ce52af4077053db784->leave($__internal_c84fb15a9ea8c9c98bbe053346a29c86559dac697457a7ce52af4077053db784_prof);

        
        $__internal_1f9b6ba45395393ad073a97accffd97b77d758eff5532b2d47c369709a0e6863->leave($__internal_1f9b6ba45395393ad073a97accffd97b77d758eff5532b2d47c369709a0e6863_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d0f4188acbae8660abd3b454f19fa261364bb2b56306180261e9ccdb8cc5b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d0f4188acbae8660abd3b454f19fa261364bb2b56306180261e9ccdb8cc5b8c->enter($__internal_7d0f4188acbae8660abd3b454f19fa261364bb2b56306180261e9ccdb8cc5b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_08cf7ba30f8e44ee4e0629137e4f8a83d626190e1f4d56f3e7415207f2ffab9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08cf7ba30f8e44ee4e0629137e4f8a83d626190e1f4d56f3e7415207f2ffab9b->enter($__internal_08cf7ba30f8e44ee4e0629137e4f8a83d626190e1f4d56f3e7415207f2ffab9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_08cf7ba30f8e44ee4e0629137e4f8a83d626190e1f4d56f3e7415207f2ffab9b->leave($__internal_08cf7ba30f8e44ee4e0629137e4f8a83d626190e1f4d56f3e7415207f2ffab9b_prof);

        
        $__internal_7d0f4188acbae8660abd3b454f19fa261364bb2b56306180261e9ccdb8cc5b8c->leave($__internal_7d0f4188acbae8660abd3b454f19fa261364bb2b56306180261e9ccdb8cc5b8c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0256c6f7a26729a23c16c58c1e2c1d051430ba98c1b082d8fe72a329cac0ab34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0256c6f7a26729a23c16c58c1e2c1d051430ba98c1b082d8fe72a329cac0ab34->enter($__internal_0256c6f7a26729a23c16c58c1e2c1d051430ba98c1b082d8fe72a329cac0ab34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fa0b66c91929c25fb6d1cf9ac68ca4952491f48cd6f6452053b4a57b8419b127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0b66c91929c25fb6d1cf9ac68ca4952491f48cd6f6452053b4a57b8419b127->enter($__internal_fa0b66c91929c25fb6d1cf9ac68ca4952491f48cd6f6452053b4a57b8419b127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fa0b66c91929c25fb6d1cf9ac68ca4952491f48cd6f6452053b4a57b8419b127->leave($__internal_fa0b66c91929c25fb6d1cf9ac68ca4952491f48cd6f6452053b4a57b8419b127_prof);

        
        $__internal_0256c6f7a26729a23c16c58c1e2c1d051430ba98c1b082d8fe72a329cac0ab34->leave($__internal_0256c6f7a26729a23c16c58c1e2c1d051430ba98c1b082d8fe72a329cac0ab34_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b59cedd5288138e97a78f211c882dc3451e961b71718781799973f93a616437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b59cedd5288138e97a78f211c882dc3451e961b71718781799973f93a616437->enter($__internal_0b59cedd5288138e97a78f211c882dc3451e961b71718781799973f93a616437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ec5755a2f3227f60d868c468cf57b8d8a09eca742778f169c6770a33cb20f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec5755a2f3227f60d868c468cf57b8d8a09eca742778f169c6770a33cb20f2c->enter($__internal_1ec5755a2f3227f60d868c468cf57b8d8a09eca742778f169c6770a33cb20f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1ec5755a2f3227f60d868c468cf57b8d8a09eca742778f169c6770a33cb20f2c->leave($__internal_1ec5755a2f3227f60d868c468cf57b8d8a09eca742778f169c6770a33cb20f2c_prof);

        
        $__internal_0b59cedd5288138e97a78f211c882dc3451e961b71718781799973f93a616437->leave($__internal_0b59cedd5288138e97a78f211c882dc3451e961b71718781799973f93a616437_prof);

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
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
