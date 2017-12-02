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
        $__internal_a80421c3108ba39560c17d960f8b1ea80232e7ae21df98a7f6b41ae38abb6069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a80421c3108ba39560c17d960f8b1ea80232e7ae21df98a7f6b41ae38abb6069->enter($__internal_a80421c3108ba39560c17d960f8b1ea80232e7ae21df98a7f6b41ae38abb6069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a9713fdcceafe96b94097a2800e89cdf68b739bd28b107ef204e9b3e7e88298d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9713fdcceafe96b94097a2800e89cdf68b739bd28b107ef204e9b3e7e88298d->enter($__internal_a9713fdcceafe96b94097a2800e89cdf68b739bd28b107ef204e9b3e7e88298d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_a80421c3108ba39560c17d960f8b1ea80232e7ae21df98a7f6b41ae38abb6069->leave($__internal_a80421c3108ba39560c17d960f8b1ea80232e7ae21df98a7f6b41ae38abb6069_prof);

        
        $__internal_a9713fdcceafe96b94097a2800e89cdf68b739bd28b107ef204e9b3e7e88298d->leave($__internal_a9713fdcceafe96b94097a2800e89cdf68b739bd28b107ef204e9b3e7e88298d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_70b06a49125c080b2b4391095cb41b33c8d75738e1f4cc8d580c0368a4a7e666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b06a49125c080b2b4391095cb41b33c8d75738e1f4cc8d580c0368a4a7e666->enter($__internal_70b06a49125c080b2b4391095cb41b33c8d75738e1f4cc8d580c0368a4a7e666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e3efe509212ea3020f7d9b22861028063474f55a128ce4960c5e85f5a575a465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3efe509212ea3020f7d9b22861028063474f55a128ce4960c5e85f5a575a465->enter($__internal_e3efe509212ea3020f7d9b22861028063474f55a128ce4960c5e85f5a575a465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e3efe509212ea3020f7d9b22861028063474f55a128ce4960c5e85f5a575a465->leave($__internal_e3efe509212ea3020f7d9b22861028063474f55a128ce4960c5e85f5a575a465_prof);

        
        $__internal_70b06a49125c080b2b4391095cb41b33c8d75738e1f4cc8d580c0368a4a7e666->leave($__internal_70b06a49125c080b2b4391095cb41b33c8d75738e1f4cc8d580c0368a4a7e666_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_be6403efa4eba8e426c55483c6f3a71ead41caf15a566d0474276017c5704f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be6403efa4eba8e426c55483c6f3a71ead41caf15a566d0474276017c5704f7e->enter($__internal_be6403efa4eba8e426c55483c6f3a71ead41caf15a566d0474276017c5704f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_02664374e34507d1fa72cadd5cd401dc5e9d7865406d42059eaf8e2015a3fc83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02664374e34507d1fa72cadd5cd401dc5e9d7865406d42059eaf8e2015a3fc83->enter($__internal_02664374e34507d1fa72cadd5cd401dc5e9d7865406d42059eaf8e2015a3fc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_02664374e34507d1fa72cadd5cd401dc5e9d7865406d42059eaf8e2015a3fc83->leave($__internal_02664374e34507d1fa72cadd5cd401dc5e9d7865406d42059eaf8e2015a3fc83_prof);

        
        $__internal_be6403efa4eba8e426c55483c6f3a71ead41caf15a566d0474276017c5704f7e->leave($__internal_be6403efa4eba8e426c55483c6f3a71ead41caf15a566d0474276017c5704f7e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_41ae42a32c8d17effbf62489523be7457bb2f46829c05327a0bf5b6b65f680c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ae42a32c8d17effbf62489523be7457bb2f46829c05327a0bf5b6b65f680c6->enter($__internal_41ae42a32c8d17effbf62489523be7457bb2f46829c05327a0bf5b6b65f680c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_113d3e5febb5c1c5cb2310c8ed2bcde1aa10782cacde65f4ebbeddcb238fae86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113d3e5febb5c1c5cb2310c8ed2bcde1aa10782cacde65f4ebbeddcb238fae86->enter($__internal_113d3e5febb5c1c5cb2310c8ed2bcde1aa10782cacde65f4ebbeddcb238fae86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_113d3e5febb5c1c5cb2310c8ed2bcde1aa10782cacde65f4ebbeddcb238fae86->leave($__internal_113d3e5febb5c1c5cb2310c8ed2bcde1aa10782cacde65f4ebbeddcb238fae86_prof);

        
        $__internal_41ae42a32c8d17effbf62489523be7457bb2f46829c05327a0bf5b6b65f680c6->leave($__internal_41ae42a32c8d17effbf62489523be7457bb2f46829c05327a0bf5b6b65f680c6_prof);

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
