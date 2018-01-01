<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_48bc6fb6d1fcb0a0dfa69cdd2dc6a54d83d1486f7f3f1b0e2577a7e1fc388bc8 extends Twig_Template
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
        $__internal_e7a23f75ebd275f15a3dee23415593cf27f96a976f34c66ffa3dc5d1a0038f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7a23f75ebd275f15a3dee23415593cf27f96a976f34c66ffa3dc5d1a0038f25->enter($__internal_e7a23f75ebd275f15a3dee23415593cf27f96a976f34c66ffa3dc5d1a0038f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f921bc6ff2733d5ce1540ad7bee15205fc881916994944be1e4ee034b7af3504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f921bc6ff2733d5ce1540ad7bee15205fc881916994944be1e4ee034b7af3504->enter($__internal_f921bc6ff2733d5ce1540ad7bee15205fc881916994944be1e4ee034b7af3504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_e7a23f75ebd275f15a3dee23415593cf27f96a976f34c66ffa3dc5d1a0038f25->leave($__internal_e7a23f75ebd275f15a3dee23415593cf27f96a976f34c66ffa3dc5d1a0038f25_prof);

        
        $__internal_f921bc6ff2733d5ce1540ad7bee15205fc881916994944be1e4ee034b7af3504->leave($__internal_f921bc6ff2733d5ce1540ad7bee15205fc881916994944be1e4ee034b7af3504_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2a9acfb251b01a6e7d007ef4432fa7e7b72ada8dac8d00a8ff8c7e735cb3320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a9acfb251b01a6e7d007ef4432fa7e7b72ada8dac8d00a8ff8c7e735cb3320->enter($__internal_c2a9acfb251b01a6e7d007ef4432fa7e7b72ada8dac8d00a8ff8c7e735cb3320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3b21973d87521f0f7a15f9c5a40e248fefcec2e267f0f7bc2294e80a0dd60c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b21973d87521f0f7a15f9c5a40e248fefcec2e267f0f7bc2294e80a0dd60c15->enter($__internal_3b21973d87521f0f7a15f9c5a40e248fefcec2e267f0f7bc2294e80a0dd60c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3b21973d87521f0f7a15f9c5a40e248fefcec2e267f0f7bc2294e80a0dd60c15->leave($__internal_3b21973d87521f0f7a15f9c5a40e248fefcec2e267f0f7bc2294e80a0dd60c15_prof);

        
        $__internal_c2a9acfb251b01a6e7d007ef4432fa7e7b72ada8dac8d00a8ff8c7e735cb3320->leave($__internal_c2a9acfb251b01a6e7d007ef4432fa7e7b72ada8dac8d00a8ff8c7e735cb3320_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b7194f7bbcdd5e21ed6aeeb32bdbcb74456967f20f711f9eeeff436e207d052f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7194f7bbcdd5e21ed6aeeb32bdbcb74456967f20f711f9eeeff436e207d052f->enter($__internal_b7194f7bbcdd5e21ed6aeeb32bdbcb74456967f20f711f9eeeff436e207d052f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7fe3c1db4a6fdf2a27107b46dc0faec64c55cc176450fbfd7a27ed4af2ed8fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe3c1db4a6fdf2a27107b46dc0faec64c55cc176450fbfd7a27ed4af2ed8fb5->enter($__internal_7fe3c1db4a6fdf2a27107b46dc0faec64c55cc176450fbfd7a27ed4af2ed8fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7fe3c1db4a6fdf2a27107b46dc0faec64c55cc176450fbfd7a27ed4af2ed8fb5->leave($__internal_7fe3c1db4a6fdf2a27107b46dc0faec64c55cc176450fbfd7a27ed4af2ed8fb5_prof);

        
        $__internal_b7194f7bbcdd5e21ed6aeeb32bdbcb74456967f20f711f9eeeff436e207d052f->leave($__internal_b7194f7bbcdd5e21ed6aeeb32bdbcb74456967f20f711f9eeeff436e207d052f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f649c123dcea2666f57c9917b8f328ffb59f345061e91b70f283f946162b9a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f649c123dcea2666f57c9917b8f328ffb59f345061e91b70f283f946162b9a3->enter($__internal_5f649c123dcea2666f57c9917b8f328ffb59f345061e91b70f283f946162b9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b696d3faa61a274ed503735052dbf601c9fb4f2cd407c9b2f4a22b354a396e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b696d3faa61a274ed503735052dbf601c9fb4f2cd407c9b2f4a22b354a396e0->enter($__internal_6b696d3faa61a274ed503735052dbf601c9fb4f2cd407c9b2f4a22b354a396e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6b696d3faa61a274ed503735052dbf601c9fb4f2cd407c9b2f4a22b354a396e0->leave($__internal_6b696d3faa61a274ed503735052dbf601c9fb4f2cd407c9b2f4a22b354a396e0_prof);

        
        $__internal_5f649c123dcea2666f57c9917b8f328ffb59f345061e91b70f283f946162b9a3->leave($__internal_5f649c123dcea2666f57c9917b8f328ffb59f345061e91b70f283f946162b9a3_prof);

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
