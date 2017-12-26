<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
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
        $__internal_461dd20ecb41d5fc3262d2a9d16a97ab478bf62a6ff28a10407f03232ac97911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_461dd20ecb41d5fc3262d2a9d16a97ab478bf62a6ff28a10407f03232ac97911->enter($__internal_461dd20ecb41d5fc3262d2a9d16a97ab478bf62a6ff28a10407f03232ac97911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_64d2cf4d4528798f9888181ee3144f273e4f2a6a4323dc4a9584e6cd4808555a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d2cf4d4528798f9888181ee3144f273e4f2a6a4323dc4a9584e6cd4808555a->enter($__internal_64d2cf4d4528798f9888181ee3144f273e4f2a6a4323dc4a9584e6cd4808555a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_461dd20ecb41d5fc3262d2a9d16a97ab478bf62a6ff28a10407f03232ac97911->leave($__internal_461dd20ecb41d5fc3262d2a9d16a97ab478bf62a6ff28a10407f03232ac97911_prof);

        
        $__internal_64d2cf4d4528798f9888181ee3144f273e4f2a6a4323dc4a9584e6cd4808555a->leave($__internal_64d2cf4d4528798f9888181ee3144f273e4f2a6a4323dc4a9584e6cd4808555a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfa70be09887ce8f0cc85841c91c8c81d179e85ebee759e8793cf39ad084a3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfa70be09887ce8f0cc85841c91c8c81d179e85ebee759e8793cf39ad084a3ba->enter($__internal_bfa70be09887ce8f0cc85841c91c8c81d179e85ebee759e8793cf39ad084a3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d3b773deda86c70d1cb12c813e468e0e0dfa34de8b3ce0413c6fb45942caa8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b773deda86c70d1cb12c813e468e0e0dfa34de8b3ce0413c6fb45942caa8e8->enter($__internal_d3b773deda86c70d1cb12c813e468e0e0dfa34de8b3ce0413c6fb45942caa8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d3b773deda86c70d1cb12c813e468e0e0dfa34de8b3ce0413c6fb45942caa8e8->leave($__internal_d3b773deda86c70d1cb12c813e468e0e0dfa34de8b3ce0413c6fb45942caa8e8_prof);

        
        $__internal_bfa70be09887ce8f0cc85841c91c8c81d179e85ebee759e8793cf39ad084a3ba->leave($__internal_bfa70be09887ce8f0cc85841c91c8c81d179e85ebee759e8793cf39ad084a3ba_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f01cdc7158f001081db829f21c2c2a891c92c584139bc86658f206f872d5dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f01cdc7158f001081db829f21c2c2a891c92c584139bc86658f206f872d5dbb->enter($__internal_5f01cdc7158f001081db829f21c2c2a891c92c584139bc86658f206f872d5dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1ab5efae33bdb5a7a95e12b863ee27c55ffe381d0b7f073f67562871937c8178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab5efae33bdb5a7a95e12b863ee27c55ffe381d0b7f073f67562871937c8178->enter($__internal_1ab5efae33bdb5a7a95e12b863ee27c55ffe381d0b7f073f67562871937c8178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1ab5efae33bdb5a7a95e12b863ee27c55ffe381d0b7f073f67562871937c8178->leave($__internal_1ab5efae33bdb5a7a95e12b863ee27c55ffe381d0b7f073f67562871937c8178_prof);

        
        $__internal_5f01cdc7158f001081db829f21c2c2a891c92c584139bc86658f206f872d5dbb->leave($__internal_5f01cdc7158f001081db829f21c2c2a891c92c584139bc86658f206f872d5dbb_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d4310fa6d50cc9b4f79bd3241c585f40d08b44efc4e76c35a3aa6dcc0af86e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d4310fa6d50cc9b4f79bd3241c585f40d08b44efc4e76c35a3aa6dcc0af86e2->enter($__internal_9d4310fa6d50cc9b4f79bd3241c585f40d08b44efc4e76c35a3aa6dcc0af86e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8cfc0fbfb7d1700f9de8bd282884bc7bce433c36660074c0958cb47f7d313e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cfc0fbfb7d1700f9de8bd282884bc7bce433c36660074c0958cb47f7d313e6c->enter($__internal_8cfc0fbfb7d1700f9de8bd282884bc7bce433c36660074c0958cb47f7d313e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8cfc0fbfb7d1700f9de8bd282884bc7bce433c36660074c0958cb47f7d313e6c->leave($__internal_8cfc0fbfb7d1700f9de8bd282884bc7bce433c36660074c0958cb47f7d313e6c_prof);

        
        $__internal_9d4310fa6d50cc9b4f79bd3241c585f40d08b44efc4e76c35a3aa6dcc0af86e2->leave($__internal_9d4310fa6d50cc9b4f79bd3241c585f40d08b44efc4e76c35a3aa6dcc0af86e2_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a2ce9fd41317f19843cf4ca73b1f1e8e0fceaa008a74b463c3d752dfbd790ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a2ce9fd41317f19843cf4ca73b1f1e8e0fceaa008a74b463c3d752dfbd790ad->enter($__internal_1a2ce9fd41317f19843cf4ca73b1f1e8e0fceaa008a74b463c3d752dfbd790ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3491b312fd11b3804d002acbeb2bb37a3e939c43f3e160db0b805f5550f64375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3491b312fd11b3804d002acbeb2bb37a3e939c43f3e160db0b805f5550f64375->enter($__internal_3491b312fd11b3804d002acbeb2bb37a3e939c43f3e160db0b805f5550f64375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_3491b312fd11b3804d002acbeb2bb37a3e939c43f3e160db0b805f5550f64375->leave($__internal_3491b312fd11b3804d002acbeb2bb37a3e939c43f3e160db0b805f5550f64375_prof);

        
        $__internal_1a2ce9fd41317f19843cf4ca73b1f1e8e0fceaa008a74b463c3d752dfbd790ad->leave($__internal_1a2ce9fd41317f19843cf4ca73b1f1e8e0fceaa008a74b463c3d752dfbd790ad_prof);

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
