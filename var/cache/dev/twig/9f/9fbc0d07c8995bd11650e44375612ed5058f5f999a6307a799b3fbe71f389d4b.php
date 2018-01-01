<?php

/* base.html.twig */
class __TwigTemplate_c52452f58948892e08c8a0c14ddf4d785bd71a280f182d95460daa43a8e2ab7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2932936ea09123b56d1c2cca9b8cb88aa41659bbdd97ed8c5b354ec942cb5ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2932936ea09123b56d1c2cca9b8cb88aa41659bbdd97ed8c5b354ec942cb5ce9->enter($__internal_2932936ea09123b56d1c2cca9b8cb88aa41659bbdd97ed8c5b354ec942cb5ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_096c7bfb7d033c6285f7ca87e06b25a68b7a149e0e9437cfecff52554e2a28be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096c7bfb7d033c6285f7ca87e06b25a68b7a149e0e9437cfecff52554e2a28be->enter($__internal_096c7bfb7d033c6285f7ca87e06b25a68b7a149e0e9437cfecff52554e2a28be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html style=\"height: 100%;\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
         <link rel=\"stylesheet\" type=\"text/css\" id=\"theme\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme-default.css"), "html", null, true);
        echo "\"/>
        
    </head>
    <body style=\"height: 100%;\">
        
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "
    </body>
</html>
";
        
        $__internal_2932936ea09123b56d1c2cca9b8cb88aa41659bbdd97ed8c5b354ec942cb5ce9->leave($__internal_2932936ea09123b56d1c2cca9b8cb88aa41659bbdd97ed8c5b354ec942cb5ce9_prof);

        
        $__internal_096c7bfb7d033c6285f7ca87e06b25a68b7a149e0e9437cfecff52554e2a28be->leave($__internal_096c7bfb7d033c6285f7ca87e06b25a68b7a149e0e9437cfecff52554e2a28be_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa474d5709e6d5a1c347079e9e9485e28989957b41dbc4be16ad5e02dce46b57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa474d5709e6d5a1c347079e9e9485e28989957b41dbc4be16ad5e02dce46b57->enter($__internal_fa474d5709e6d5a1c347079e9e9485e28989957b41dbc4be16ad5e02dce46b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_52c3ec392a16701e7fa6cc0a6850410b8f9b67568a1df40f0fd93196206a852e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c3ec392a16701e7fa6cc0a6850410b8f9b67568a1df40f0fd93196206a852e->enter($__internal_52c3ec392a16701e7fa6cc0a6850410b8f9b67568a1df40f0fd93196206a852e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_52c3ec392a16701e7fa6cc0a6850410b8f9b67568a1df40f0fd93196206a852e->leave($__internal_52c3ec392a16701e7fa6cc0a6850410b8f9b67568a1df40f0fd93196206a852e_prof);

        
        $__internal_fa474d5709e6d5a1c347079e9e9485e28989957b41dbc4be16ad5e02dce46b57->leave($__internal_fa474d5709e6d5a1c347079e9e9485e28989957b41dbc4be16ad5e02dce46b57_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_488de42260968ba835f55c1be50c507a77986eb2714eab8e9fb9dde5d51d4198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_488de42260968ba835f55c1be50c507a77986eb2714eab8e9fb9dde5d51d4198->enter($__internal_488de42260968ba835f55c1be50c507a77986eb2714eab8e9fb9dde5d51d4198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c6b10e8d69079f352d9163b52db6aac705d56fa5732dbc57065834ffd3cab54c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b10e8d69079f352d9163b52db6aac705d56fa5732dbc57065834ffd3cab54c->enter($__internal_c6b10e8d69079f352d9163b52db6aac705d56fa5732dbc57065834ffd3cab54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c6b10e8d69079f352d9163b52db6aac705d56fa5732dbc57065834ffd3cab54c->leave($__internal_c6b10e8d69079f352d9163b52db6aac705d56fa5732dbc57065834ffd3cab54c_prof);

        
        $__internal_488de42260968ba835f55c1be50c507a77986eb2714eab8e9fb9dde5d51d4198->leave($__internal_488de42260968ba835f55c1be50c507a77986eb2714eab8e9fb9dde5d51d4198_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dca6f5eafa5f67e018c3a1cd3e11bbb8c64a8c4796cc80286fb341b09f5ee27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dca6f5eafa5f67e018c3a1cd3e11bbb8c64a8c4796cc80286fb341b09f5ee27->enter($__internal_3dca6f5eafa5f67e018c3a1cd3e11bbb8c64a8c4796cc80286fb341b09f5ee27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4de8810efaa6320a421b3945d0f15c3b313935a843dc98015e63f87387db6f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de8810efaa6320a421b3945d0f15c3b313935a843dc98015e63f87387db6f8a->enter($__internal_4de8810efaa6320a421b3945d0f15c3b313935a843dc98015e63f87387db6f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4de8810efaa6320a421b3945d0f15c3b313935a843dc98015e63f87387db6f8a->leave($__internal_4de8810efaa6320a421b3945d0f15c3b313935a843dc98015e63f87387db6f8a_prof);

        
        $__internal_3dca6f5eafa5f67e018c3a1cd3e11bbb8c64a8c4796cc80286fb341b09f5ee27->leave($__internal_3dca6f5eafa5f67e018c3a1cd3e11bbb8c64a8c4796cc80286fb341b09f5ee27_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a96d5e7d096b972f47c505e28642e33234d99cb7455b82e47e7a2aa78f2d8cb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96d5e7d096b972f47c505e28642e33234d99cb7455b82e47e7a2aa78f2d8cb1->enter($__internal_a96d5e7d096b972f47c505e28642e33234d99cb7455b82e47e7a2aa78f2d8cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_38a82a327c49dcc8593d1477de8b9ba3126d045819870b40f0c5eaf921b62b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a82a327c49dcc8593d1477de8b9ba3126d045819870b40f0c5eaf921b62b2c->enter($__internal_38a82a327c49dcc8593d1477de8b9ba3126d045819870b40f0c5eaf921b62b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_38a82a327c49dcc8593d1477de8b9ba3126d045819870b40f0c5eaf921b62b2c->leave($__internal_38a82a327c49dcc8593d1477de8b9ba3126d045819870b40f0c5eaf921b62b2c_prof);

        
        $__internal_a96d5e7d096b972f47c505e28642e33234d99cb7455b82e47e7a2aa78f2d8cb1->leave($__internal_a96d5e7d096b972f47c505e28642e33234d99cb7455b82e47e7a2aa78f2d8cb1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 16,  126 => 15,  109 => 13,  92 => 6,  74 => 5,  61 => 17,  59 => 15,  56 => 14,  54 => 13,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
<html style=\"height: 100%;\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
         <link rel=\"stylesheet\" type=\"text/css\" id=\"theme\" href=\"{{ asset('css/theme-default.css') }}\"/>
        
    </head>
    <body style=\"height: 100%;\">
        
        {% block body %}{% endblock %}

        {% block javascripts %}
        {% endblock %}

    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/base.html.twig");
    }
}
