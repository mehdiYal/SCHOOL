<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_164a75a162bc78d3baba52679bc50a50bd2054c5416c3c85b22a8e23bb308a40 extends Twig_Template
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
        $__internal_9500925bedfb775d0b8e449b3967f90cfcad7f507c8efe55b28b900d30bcbdec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9500925bedfb775d0b8e449b3967f90cfcad7f507c8efe55b28b900d30bcbdec->enter($__internal_9500925bedfb775d0b8e449b3967f90cfcad7f507c8efe55b28b900d30bcbdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2d05a905a5e6d46505d5350f4b3c98fb3bd652ac2e95b32fb1f0b85a5ca563f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d05a905a5e6d46505d5350f4b3c98fb3bd652ac2e95b32fb1f0b85a5ca563f0->enter($__internal_2d05a905a5e6d46505d5350f4b3c98fb3bd652ac2e95b32fb1f0b85a5ca563f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_9500925bedfb775d0b8e449b3967f90cfcad7f507c8efe55b28b900d30bcbdec->leave($__internal_9500925bedfb775d0b8e449b3967f90cfcad7f507c8efe55b28b900d30bcbdec_prof);

        
        $__internal_2d05a905a5e6d46505d5350f4b3c98fb3bd652ac2e95b32fb1f0b85a5ca563f0->leave($__internal_2d05a905a5e6d46505d5350f4b3c98fb3bd652ac2e95b32fb1f0b85a5ca563f0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8b47d9a8695235dc606811f187736204df6e43b8eceb18b9ef4f3485129ea0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b47d9a8695235dc606811f187736204df6e43b8eceb18b9ef4f3485129ea0d->enter($__internal_c8b47d9a8695235dc606811f187736204df6e43b8eceb18b9ef4f3485129ea0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c6f29a8cb37607c694c9048728160fabaabbc351ed6062edfc6da9cdaf2acb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6f29a8cb37607c694c9048728160fabaabbc351ed6062edfc6da9cdaf2acb9->enter($__internal_1c6f29a8cb37607c694c9048728160fabaabbc351ed6062edfc6da9cdaf2acb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1c6f29a8cb37607c694c9048728160fabaabbc351ed6062edfc6da9cdaf2acb9->leave($__internal_1c6f29a8cb37607c694c9048728160fabaabbc351ed6062edfc6da9cdaf2acb9_prof);

        
        $__internal_c8b47d9a8695235dc606811f187736204df6e43b8eceb18b9ef4f3485129ea0d->leave($__internal_c8b47d9a8695235dc606811f187736204df6e43b8eceb18b9ef4f3485129ea0d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8123568578c40cfc46909ed29fe5a6c9bc5b70195749f00ec1137c93c886a9bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8123568578c40cfc46909ed29fe5a6c9bc5b70195749f00ec1137c93c886a9bd->enter($__internal_8123568578c40cfc46909ed29fe5a6c9bc5b70195749f00ec1137c93c886a9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_188958f1436cc6350eb796a08d7d12a4db591fe3851f353c7382c8f598d79a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188958f1436cc6350eb796a08d7d12a4db591fe3851f353c7382c8f598d79a28->enter($__internal_188958f1436cc6350eb796a08d7d12a4db591fe3851f353c7382c8f598d79a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_188958f1436cc6350eb796a08d7d12a4db591fe3851f353c7382c8f598d79a28->leave($__internal_188958f1436cc6350eb796a08d7d12a4db591fe3851f353c7382c8f598d79a28_prof);

        
        $__internal_8123568578c40cfc46909ed29fe5a6c9bc5b70195749f00ec1137c93c886a9bd->leave($__internal_8123568578c40cfc46909ed29fe5a6c9bc5b70195749f00ec1137c93c886a9bd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5efbb182cdbf003cb778ff7ba1f86d7a2e93d4f66c4280d87cdcaafd5db44251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5efbb182cdbf003cb778ff7ba1f86d7a2e93d4f66c4280d87cdcaafd5db44251->enter($__internal_5efbb182cdbf003cb778ff7ba1f86d7a2e93d4f66c4280d87cdcaafd5db44251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba60ff5227f9315cefa9b4adc134bf11543d5d8c005f7aab3d7156e0624912a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba60ff5227f9315cefa9b4adc134bf11543d5d8c005f7aab3d7156e0624912a3->enter($__internal_ba60ff5227f9315cefa9b4adc134bf11543d5d8c005f7aab3d7156e0624912a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ba60ff5227f9315cefa9b4adc134bf11543d5d8c005f7aab3d7156e0624912a3->leave($__internal_ba60ff5227f9315cefa9b4adc134bf11543d5d8c005f7aab3d7156e0624912a3_prof);

        
        $__internal_5efbb182cdbf003cb778ff7ba1f86d7a2e93d4f66c4280d87cdcaafd5db44251->leave($__internal_5efbb182cdbf003cb778ff7ba1f86d7a2e93d4f66c4280d87cdcaafd5db44251_prof);

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
