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
        $__internal_c8fb2a6f5b2961cf5009f207f096673da5428294585e7288c88418f935190037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8fb2a6f5b2961cf5009f207f096673da5428294585e7288c88418f935190037->enter($__internal_c8fb2a6f5b2961cf5009f207f096673da5428294585e7288c88418f935190037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_fd4ace876d7951432beab980e85cdd0f153ca950571313c7a579714a8cc4c934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4ace876d7951432beab980e85cdd0f153ca950571313c7a579714a8cc4c934->enter($__internal_fd4ace876d7951432beab980e85cdd0f153ca950571313c7a579714a8cc4c934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_c8fb2a6f5b2961cf5009f207f096673da5428294585e7288c88418f935190037->leave($__internal_c8fb2a6f5b2961cf5009f207f096673da5428294585e7288c88418f935190037_prof);

        
        $__internal_fd4ace876d7951432beab980e85cdd0f153ca950571313c7a579714a8cc4c934->leave($__internal_fd4ace876d7951432beab980e85cdd0f153ca950571313c7a579714a8cc4c934_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_44cef5c98c33ab86ce615010082b36182c6441412a712b97c782a181156a4164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44cef5c98c33ab86ce615010082b36182c6441412a712b97c782a181156a4164->enter($__internal_44cef5c98c33ab86ce615010082b36182c6441412a712b97c782a181156a4164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d1aad63392571399aa70dda56bc01f043c4e6cd9dbb6434b522652197af5320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1aad63392571399aa70dda56bc01f043c4e6cd9dbb6434b522652197af5320->enter($__internal_0d1aad63392571399aa70dda56bc01f043c4e6cd9dbb6434b522652197af5320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0d1aad63392571399aa70dda56bc01f043c4e6cd9dbb6434b522652197af5320->leave($__internal_0d1aad63392571399aa70dda56bc01f043c4e6cd9dbb6434b522652197af5320_prof);

        
        $__internal_44cef5c98c33ab86ce615010082b36182c6441412a712b97c782a181156a4164->leave($__internal_44cef5c98c33ab86ce615010082b36182c6441412a712b97c782a181156a4164_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1220e54f90ed5242ba6c5f53562998ecd619aae2a670a51aadba77a20908f8d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1220e54f90ed5242ba6c5f53562998ecd619aae2a670a51aadba77a20908f8d8->enter($__internal_1220e54f90ed5242ba6c5f53562998ecd619aae2a670a51aadba77a20908f8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f79d31e91016c69432d3be4520311d2fa783227421518be72e36028aa536eb7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79d31e91016c69432d3be4520311d2fa783227421518be72e36028aa536eb7c->enter($__internal_f79d31e91016c69432d3be4520311d2fa783227421518be72e36028aa536eb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f79d31e91016c69432d3be4520311d2fa783227421518be72e36028aa536eb7c->leave($__internal_f79d31e91016c69432d3be4520311d2fa783227421518be72e36028aa536eb7c_prof);

        
        $__internal_1220e54f90ed5242ba6c5f53562998ecd619aae2a670a51aadba77a20908f8d8->leave($__internal_1220e54f90ed5242ba6c5f53562998ecd619aae2a670a51aadba77a20908f8d8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e1a185effa88621d138ab7c730961d66570edbf70d12ead01071bcc29f15972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e1a185effa88621d138ab7c730961d66570edbf70d12ead01071bcc29f15972->enter($__internal_1e1a185effa88621d138ab7c730961d66570edbf70d12ead01071bcc29f15972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4cb6cd22a7c0b4a6bba00d88a1c82ceee387a610dd748527908a6f7a6eee9bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4cb6cd22a7c0b4a6bba00d88a1c82ceee387a610dd748527908a6f7a6eee9bd->enter($__internal_f4cb6cd22a7c0b4a6bba00d88a1c82ceee387a610dd748527908a6f7a6eee9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f4cb6cd22a7c0b4a6bba00d88a1c82ceee387a610dd748527908a6f7a6eee9bd->leave($__internal_f4cb6cd22a7c0b4a6bba00d88a1c82ceee387a610dd748527908a6f7a6eee9bd_prof);

        
        $__internal_1e1a185effa88621d138ab7c730961d66570edbf70d12ead01071bcc29f15972->leave($__internal_1e1a185effa88621d138ab7c730961d66570edbf70d12ead01071bcc29f15972_prof);

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
