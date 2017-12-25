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
        $__internal_047ec6207c623ccd41bfb8e41a461559b84362c369d900d580b617be27138515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_047ec6207c623ccd41bfb8e41a461559b84362c369d900d580b617be27138515->enter($__internal_047ec6207c623ccd41bfb8e41a461559b84362c369d900d580b617be27138515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e94b9ff2a129b9019aabd774e0fbddc619f9f7522198bd6a171ae0cacbb0c585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94b9ff2a129b9019aabd774e0fbddc619f9f7522198bd6a171ae0cacbb0c585->enter($__internal_e94b9ff2a129b9019aabd774e0fbddc619f9f7522198bd6a171ae0cacbb0c585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_047ec6207c623ccd41bfb8e41a461559b84362c369d900d580b617be27138515->leave($__internal_047ec6207c623ccd41bfb8e41a461559b84362c369d900d580b617be27138515_prof);

        
        $__internal_e94b9ff2a129b9019aabd774e0fbddc619f9f7522198bd6a171ae0cacbb0c585->leave($__internal_e94b9ff2a129b9019aabd774e0fbddc619f9f7522198bd6a171ae0cacbb0c585_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5e0d9ccaf348845b8f8b00fb2a1de2c4db7cd464b7c566ccb86feaad64afab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5e0d9ccaf348845b8f8b00fb2a1de2c4db7cd464b7c566ccb86feaad64afab0->enter($__internal_d5e0d9ccaf348845b8f8b00fb2a1de2c4db7cd464b7c566ccb86feaad64afab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d46aacb15dcadb7e991e64325ed958d0ee49cf1bc38805ca32de158a0563eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d46aacb15dcadb7e991e64325ed958d0ee49cf1bc38805ca32de158a0563eb3->enter($__internal_3d46aacb15dcadb7e991e64325ed958d0ee49cf1bc38805ca32de158a0563eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3d46aacb15dcadb7e991e64325ed958d0ee49cf1bc38805ca32de158a0563eb3->leave($__internal_3d46aacb15dcadb7e991e64325ed958d0ee49cf1bc38805ca32de158a0563eb3_prof);

        
        $__internal_d5e0d9ccaf348845b8f8b00fb2a1de2c4db7cd464b7c566ccb86feaad64afab0->leave($__internal_d5e0d9ccaf348845b8f8b00fb2a1de2c4db7cd464b7c566ccb86feaad64afab0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b460800ec7d4503c09e84ba7ab43a203f03b64737edd9909b4c65e2849fecc25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b460800ec7d4503c09e84ba7ab43a203f03b64737edd9909b4c65e2849fecc25->enter($__internal_b460800ec7d4503c09e84ba7ab43a203f03b64737edd9909b4c65e2849fecc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_22cc4fde1b38d54bb44e7d41e8f479b34567510b643d73502e0114ad15f3ded4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22cc4fde1b38d54bb44e7d41e8f479b34567510b643d73502e0114ad15f3ded4->enter($__internal_22cc4fde1b38d54bb44e7d41e8f479b34567510b643d73502e0114ad15f3ded4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_22cc4fde1b38d54bb44e7d41e8f479b34567510b643d73502e0114ad15f3ded4->leave($__internal_22cc4fde1b38d54bb44e7d41e8f479b34567510b643d73502e0114ad15f3ded4_prof);

        
        $__internal_b460800ec7d4503c09e84ba7ab43a203f03b64737edd9909b4c65e2849fecc25->leave($__internal_b460800ec7d4503c09e84ba7ab43a203f03b64737edd9909b4c65e2849fecc25_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a51f613d4c9dcf0fab95e0aea7706fac1c82a27a0b2bf07636ad773d0164e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a51f613d4c9dcf0fab95e0aea7706fac1c82a27a0b2bf07636ad773d0164e66->enter($__internal_2a51f613d4c9dcf0fab95e0aea7706fac1c82a27a0b2bf07636ad773d0164e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12fc1a9d195a5d38beb6d717c2923f38a2424fe6aa40afcd90c78daf8407a35c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12fc1a9d195a5d38beb6d717c2923f38a2424fe6aa40afcd90c78daf8407a35c->enter($__internal_12fc1a9d195a5d38beb6d717c2923f38a2424fe6aa40afcd90c78daf8407a35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_12fc1a9d195a5d38beb6d717c2923f38a2424fe6aa40afcd90c78daf8407a35c->leave($__internal_12fc1a9d195a5d38beb6d717c2923f38a2424fe6aa40afcd90c78daf8407a35c_prof);

        
        $__internal_2a51f613d4c9dcf0fab95e0aea7706fac1c82a27a0b2bf07636ad773d0164e66->leave($__internal_2a51f613d4c9dcf0fab95e0aea7706fac1c82a27a0b2bf07636ad773d0164e66_prof);

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
