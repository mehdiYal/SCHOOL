<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_130339196c348cffc9f3673ca2c391b82406986c91274cb850a35eab7d4a4802 extends Twig_Template
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
        $__internal_e7f67e10d53c0794a4773beca77232d2a5c91de9457e89938f23c893a9490f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f67e10d53c0794a4773beca77232d2a5c91de9457e89938f23c893a9490f60->enter($__internal_e7f67e10d53c0794a4773beca77232d2a5c91de9457e89938f23c893a9490f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_72c0d316475f43ce060c35880a622b135c6990c89a612b9afdf0b70911b044a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c0d316475f43ce060c35880a622b135c6990c89a612b9afdf0b70911b044a4->enter($__internal_72c0d316475f43ce060c35880a622b135c6990c89a612b9afdf0b70911b044a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_e7f67e10d53c0794a4773beca77232d2a5c91de9457e89938f23c893a9490f60->leave($__internal_e7f67e10d53c0794a4773beca77232d2a5c91de9457e89938f23c893a9490f60_prof);

        
        $__internal_72c0d316475f43ce060c35880a622b135c6990c89a612b9afdf0b70911b044a4->leave($__internal_72c0d316475f43ce060c35880a622b135c6990c89a612b9afdf0b70911b044a4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4874c26b2f6a7836b8724c866db26c722e58bf94c9127723bc8354ccb4fed133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4874c26b2f6a7836b8724c866db26c722e58bf94c9127723bc8354ccb4fed133->enter($__internal_4874c26b2f6a7836b8724c866db26c722e58bf94c9127723bc8354ccb4fed133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_06aff257865ecc6aa3c5379ed06fed479fbfacff2c94a788d2b86acf70bc3799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06aff257865ecc6aa3c5379ed06fed479fbfacff2c94a788d2b86acf70bc3799->enter($__internal_06aff257865ecc6aa3c5379ed06fed479fbfacff2c94a788d2b86acf70bc3799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_06aff257865ecc6aa3c5379ed06fed479fbfacff2c94a788d2b86acf70bc3799->leave($__internal_06aff257865ecc6aa3c5379ed06fed479fbfacff2c94a788d2b86acf70bc3799_prof);

        
        $__internal_4874c26b2f6a7836b8724c866db26c722e58bf94c9127723bc8354ccb4fed133->leave($__internal_4874c26b2f6a7836b8724c866db26c722e58bf94c9127723bc8354ccb4fed133_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f267c78cbc098a3a9a6a2b9c189c47fcaebc91c4c1b0b043d899b51608679be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f267c78cbc098a3a9a6a2b9c189c47fcaebc91c4c1b0b043d899b51608679be->enter($__internal_0f267c78cbc098a3a9a6a2b9c189c47fcaebc91c4c1b0b043d899b51608679be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_08784980e754ac68fe79f9131b98311910d07b02681575808880e8212dfd8895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08784980e754ac68fe79f9131b98311910d07b02681575808880e8212dfd8895->enter($__internal_08784980e754ac68fe79f9131b98311910d07b02681575808880e8212dfd8895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_08784980e754ac68fe79f9131b98311910d07b02681575808880e8212dfd8895->leave($__internal_08784980e754ac68fe79f9131b98311910d07b02681575808880e8212dfd8895_prof);

        
        $__internal_0f267c78cbc098a3a9a6a2b9c189c47fcaebc91c4c1b0b043d899b51608679be->leave($__internal_0f267c78cbc098a3a9a6a2b9c189c47fcaebc91c4c1b0b043d899b51608679be_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_170ad5219c1c723dbc2918d309fde7d1568218fdaa48ab9accda3029b2eaec91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_170ad5219c1c723dbc2918d309fde7d1568218fdaa48ab9accda3029b2eaec91->enter($__internal_170ad5219c1c723dbc2918d309fde7d1568218fdaa48ab9accda3029b2eaec91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea602b8ba6ab4b7449a40eaec14940f37481c18d90ba78937c9f35f3aa8c161d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea602b8ba6ab4b7449a40eaec14940f37481c18d90ba78937c9f35f3aa8c161d->enter($__internal_ea602b8ba6ab4b7449a40eaec14940f37481c18d90ba78937c9f35f3aa8c161d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ea602b8ba6ab4b7449a40eaec14940f37481c18d90ba78937c9f35f3aa8c161d->leave($__internal_ea602b8ba6ab4b7449a40eaec14940f37481c18d90ba78937c9f35f3aa8c161d_prof);

        
        $__internal_170ad5219c1c723dbc2918d309fde7d1568218fdaa48ab9accda3029b2eaec91->leave($__internal_170ad5219c1c723dbc2918d309fde7d1568218fdaa48ab9accda3029b2eaec91_prof);

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
