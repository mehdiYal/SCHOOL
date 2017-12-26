<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5f34ed8ad1b6d6d7ef7f69b3bee54b67f25844705cfd3e12796d627f73c91694 extends Twig_Template
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
        $__internal_9a82525e72d7c043dd684ece1b4aad114ec46824f03e6d5e6dd3aa92c92be7ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a82525e72d7c043dd684ece1b4aad114ec46824f03e6d5e6dd3aa92c92be7ef->enter($__internal_9a82525e72d7c043dd684ece1b4aad114ec46824f03e6d5e6dd3aa92c92be7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_93ad9f54978f0927bce85c9797354be36a2e5935fb92d14250cf670f7b1ebcdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ad9f54978f0927bce85c9797354be36a2e5935fb92d14250cf670f7b1ebcdf->enter($__internal_93ad9f54978f0927bce85c9797354be36a2e5935fb92d14250cf670f7b1ebcdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_9a82525e72d7c043dd684ece1b4aad114ec46824f03e6d5e6dd3aa92c92be7ef->leave($__internal_9a82525e72d7c043dd684ece1b4aad114ec46824f03e6d5e6dd3aa92c92be7ef_prof);

        
        $__internal_93ad9f54978f0927bce85c9797354be36a2e5935fb92d14250cf670f7b1ebcdf->leave($__internal_93ad9f54978f0927bce85c9797354be36a2e5935fb92d14250cf670f7b1ebcdf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_571255e09d58132ed3fd61f44afed017bb79acbccdf90ac8c800c96b58212954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571255e09d58132ed3fd61f44afed017bb79acbccdf90ac8c800c96b58212954->enter($__internal_571255e09d58132ed3fd61f44afed017bb79acbccdf90ac8c800c96b58212954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b3b747a03cc0c61e06ecd684398ab51beb1ead65817ba35ec20f8c794f2324be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b747a03cc0c61e06ecd684398ab51beb1ead65817ba35ec20f8c794f2324be->enter($__internal_b3b747a03cc0c61e06ecd684398ab51beb1ead65817ba35ec20f8c794f2324be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b3b747a03cc0c61e06ecd684398ab51beb1ead65817ba35ec20f8c794f2324be->leave($__internal_b3b747a03cc0c61e06ecd684398ab51beb1ead65817ba35ec20f8c794f2324be_prof);

        
        $__internal_571255e09d58132ed3fd61f44afed017bb79acbccdf90ac8c800c96b58212954->leave($__internal_571255e09d58132ed3fd61f44afed017bb79acbccdf90ac8c800c96b58212954_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_408b4e9294b51e37090e1567af8f8ec43ea58e71a49e4d3d55fdd2d2488fb422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408b4e9294b51e37090e1567af8f8ec43ea58e71a49e4d3d55fdd2d2488fb422->enter($__internal_408b4e9294b51e37090e1567af8f8ec43ea58e71a49e4d3d55fdd2d2488fb422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cfc180113ad040203e7f558f2a2265f9a20f366794eeb6461eb50b6b0b865604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc180113ad040203e7f558f2a2265f9a20f366794eeb6461eb50b6b0b865604->enter($__internal_cfc180113ad040203e7f558f2a2265f9a20f366794eeb6461eb50b6b0b865604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_cfc180113ad040203e7f558f2a2265f9a20f366794eeb6461eb50b6b0b865604->leave($__internal_cfc180113ad040203e7f558f2a2265f9a20f366794eeb6461eb50b6b0b865604_prof);

        
        $__internal_408b4e9294b51e37090e1567af8f8ec43ea58e71a49e4d3d55fdd2d2488fb422->leave($__internal_408b4e9294b51e37090e1567af8f8ec43ea58e71a49e4d3d55fdd2d2488fb422_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf08f2f401dda5d8c631b9dbeeda5bc386b02ee620f6f63460299e6e54eba58c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf08f2f401dda5d8c631b9dbeeda5bc386b02ee620f6f63460299e6e54eba58c->enter($__internal_cf08f2f401dda5d8c631b9dbeeda5bc386b02ee620f6f63460299e6e54eba58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a171849d48b9f9f22c2350a12b068d58fbf0f89a03809d34a04a023d34d1bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a171849d48b9f9f22c2350a12b068d58fbf0f89a03809d34a04a023d34d1bbb->enter($__internal_7a171849d48b9f9f22c2350a12b068d58fbf0f89a03809d34a04a023d34d1bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7a171849d48b9f9f22c2350a12b068d58fbf0f89a03809d34a04a023d34d1bbb->leave($__internal_7a171849d48b9f9f22c2350a12b068d58fbf0f89a03809d34a04a023d34d1bbb_prof);

        
        $__internal_cf08f2f401dda5d8c631b9dbeeda5bc386b02ee620f6f63460299e6e54eba58c->leave($__internal_cf08f2f401dda5d8c631b9dbeeda5bc386b02ee620f6f63460299e6e54eba58c_prof);

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
