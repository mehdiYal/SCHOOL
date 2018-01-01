<?php

/* :travailrealise:showParent.html.twig */
class __TwigTemplate_a166eee1ac52eb396e8dcdcffc9e60471066fa884f3884eb1c85cefedae43201 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseParent.html.twig", ":travailrealise:showParent.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29eb0ebf5e15f517a37add841aa19ae77ccbf0df585f4944f973e19998c0d618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29eb0ebf5e15f517a37add841aa19ae77ccbf0df585f4944f973e19998c0d618->enter($__internal_29eb0ebf5e15f517a37add841aa19ae77ccbf0df585f4944f973e19998c0d618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":travailrealise:showParent.html.twig"));

        $__internal_7e4996aa16ffdedf9946cd1559be178507e688fffe448eaa06196312ab95e316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4996aa16ffdedf9946cd1559be178507e688fffe448eaa06196312ab95e316->enter($__internal_7e4996aa16ffdedf9946cd1559be178507e688fffe448eaa06196312ab95e316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":travailrealise:showParent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29eb0ebf5e15f517a37add841aa19ae77ccbf0df585f4944f973e19998c0d618->leave($__internal_29eb0ebf5e15f517a37add841aa19ae77ccbf0df585f4944f973e19998c0d618_prof);

        
        $__internal_7e4996aa16ffdedf9946cd1559be178507e688fffe448eaa06196312ab95e316->leave($__internal_7e4996aa16ffdedf9946cd1559be178507e688fffe448eaa06196312ab95e316_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_149ddb2e9c150486f93de658098e50baff0f768128ca207e1ad093739f925829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_149ddb2e9c150486f93de658098e50baff0f768128ca207e1ad093739f925829->enter($__internal_149ddb2e9c150486f93de658098e50baff0f768128ca207e1ad093739f925829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4638f60dcb5b3294a5f81d6352f8b871691804784d11cb2a13aeb1e8eef3265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4638f60dcb5b3294a5f81d6352f8b871691804784d11cb2a13aeb1e8eef3265->enter($__internal_a4638f60dcb5b3294a5f81d6352f8b871691804784d11cb2a13aeb1e8eef3265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"page-title\">                    
        <h2><span class=\"fa fa-info-circle\"></span> Informations :</h2>
    </div>
    <div class=\"row\">
    \t<div class=\"col-md-12\">                             
                <div class=\"messages messages-img\">
                    <div class=\"item\">
                        <div class=\"image\">
                            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        echo "\" alt=\"John Doe\"/>
                        </div>
                        <div class=\"text\">
                            <div class=\"heading\">
                                <a href=\"#\">John Doe</a>
                                <span class=\"date\">08:33</span>
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"image\">
                            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        echo "\" alt=\"Dmitry Ivaniuk\"/>
                        </div>                                
                        <div class=\"text\">
                            <div class=\"heading\">
                                <a href=\"#\">Dmitry Ivaniuk</a>
                                <span class=\"date\">08:27</span>
                            </div>                                    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"image\">
                            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        echo "\" alt=\"Dmitry Ivaniuk\"/>
                        </div>                                
                        <div class=\"text\">
                            <div class=\"heading\">
                                <a href=\"#\">Dmitry Ivaniuk</a>
                                <span class=\"date\">08:27</span>
                            </div>                                    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"image\">
                            <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        echo "\" alt=\"Dmitry Ivaniuk\"/>
                        </div>                                
                        <div class=\"text\">
                            <div class=\"heading\">
                                <a href=\"#\">Dmitry Ivaniuk</a>
                                <span class=\"date\">08:27</span>
                            </div>                                    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"image\">
                            <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        echo "\" alt=\"Dmitry Ivaniuk\"/>
                        </div>                                
                        <div class=\"text\">
                            <div class=\"heading\">
                                <a href=\"#\">Dmitry Ivaniuk</a>
                                <span class=\"date\">08:27</span>
                            </div>                                    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"image\">
                            <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        echo "\" alt=\"Dmitry Ivaniuk\"/>
                        </div>                                
                        <div class=\"text\">
                            <div class=\"heading\">
                                <a href=\"#\">Dmitry Ivaniuk</a>
                                <span class=\"date\">08:27</span>
                            </div>                                    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"image\">
                            <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        echo "\" alt=\"Dmitry Ivaniuk\"/>
                        </div>                                
                        <div class=\"text\">
                            <div class=\"heading\">
                                <a href=\"#\">Dmitry Ivaniuk</a>
                                <span class=\"date\">08:27</span>
                            </div>                                    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"image\">
                            <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        echo "\" alt=\"Dmitry Ivaniuk\"/>
                        </div>                                
                        <div class=\"text\">
                            <div class=\"heading\">
                                <a href=\"#\">Dmitry Ivaniuk</a>
                                <span class=\"date\">08:27</span>
                            </div>                                    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"image\">
                            <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        echo "\" alt=\"Dmitry Ivaniuk\"/>
                        </div>                                
                        <div class=\"text\">
                            <div class=\"heading\">
                                <a href=\"#\">Dmitry Ivaniuk</a>
                                <span class=\"date\">08:27</span>
                            </div>                                    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"image\">
                            <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        echo "\" alt=\"Dmitry Ivaniuk\"/>
                        </div>                                
                        <div class=\"text\">
                            <div class=\"heading\">
                                <a href=\"#\">Dmitry Ivaniuk</a>
                                <span class=\"date\">08:27</span>
                            </div>                                    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                        </div>
                    </div>

                </div>

            </div>
    </div>

";
        
        $__internal_a4638f60dcb5b3294a5f81d6352f8b871691804784d11cb2a13aeb1e8eef3265->leave($__internal_a4638f60dcb5b3294a5f81d6352f8b871691804784d11cb2a13aeb1e8eef3265_prof);

        
        $__internal_149ddb2e9c150486f93de658098e50baff0f768128ca207e1ad093739f925829->leave($__internal_149ddb2e9c150486f93de658098e50baff0f768128ca207e1ad093739f925829_prof);

    }

    // line 138
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b7505d5a7d8b00da04158c15e6c82ad8b0cd37921505e81d75ae297203e2b30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7505d5a7d8b00da04158c15e6c82ad8b0cd37921505e81d75ae297203e2b30->enter($__internal_0b7505d5a7d8b00da04158c15e6c82ad8b0cd37921505e81d75ae297203e2b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_256c0953e1fe96fa5cab15abfe00fdb007b5047697ce50a9b0d638c604c96d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256c0953e1fe96fa5cab15abfe00fdb007b5047697ce50a9b0d638c604c96d45->enter($__internal_256c0953e1fe96fa5cab15abfe00fdb007b5047697ce50a9b0d638c604c96d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 139
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.info').addClass('active');
    </script>
";
        
        $__internal_256c0953e1fe96fa5cab15abfe00fdb007b5047697ce50a9b0d638c604c96d45->leave($__internal_256c0953e1fe96fa5cab15abfe00fdb007b5047697ce50a9b0d638c604c96d45_prof);

        
        $__internal_0b7505d5a7d8b00da04158c15e6c82ad8b0cd37921505e81d75ae297203e2b30->leave($__internal_0b7505d5a7d8b00da04158c15e6c82ad8b0cd37921505e81d75ae297203e2b30_prof);

    }

    public function getTemplateName()
    {
        return ":travailrealise:showParent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 139,  222 => 138,  195 => 120,  180 => 108,  165 => 96,  150 => 84,  135 => 72,  120 => 60,  105 => 48,  90 => 36,  75 => 24,  60 => 12,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseParent.html.twig' %}

{% block body %}
\t<div class=\"page-title\">                    
        <h2><span class=\"fa fa-info-circle\"></span> Informations :</h2>
    </div>
    <div class=\"row\">
    \t<div class=\"col-md-12\">                             
                <div class=\"messages messages-img\">
                    <div class=\"item\">
                        <div class=\"image\">
                            <img src=\"{{ asset('uploads/photos/avatar.png') }}\" alt=\"John Doe\"/>
                        </div>
                        <div class=\"text\">
                            <div class=\"heading\">
                                <a href=\"#\">John Doe</a>
                                <span class=\"date\">08:33</span>
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"image\">
                            <img src=\"{{ asset('uploads/photos/avatar.png') }}\" alt=\"Dmitry Ivaniuk\"/>
                        </div>                                
                        <div class=\"text\">
                            <div class=\"heading\">
                                <a href=\"#\">Dmitry Ivaniuk</a>
                                <span class=\"date\">08:27</span>
                            </div>                                    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"image\">
                            <img src=\"{{ asset('uploads/photos/avatar.png') }}\" alt=\"Dmitry Ivaniuk\"/>
                        </div>                                
                        <div class=\"text\">
                            <div class=\"heading\">
                                <a href=\"#\">Dmitry Ivaniuk</a>
                                <span class=\"date\">08:27</span>
                            </div>                                    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"image\">
                            <img src=\"{{ asset('uploads/photos/avatar.png') }}\" alt=\"Dmitry Ivaniuk\"/>
                        </div>                                
                        <div class=\"text\">
                            <div class=\"heading\">
                                <a href=\"#\">Dmitry Ivaniuk</a>
                                <span class=\"date\">08:27</span>
                            </div>                                    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"image\">
                            <img src=\"{{ asset('uploads/photos/avatar.png') }}\" alt=\"Dmitry Ivaniuk\"/>
                        </div>                                
                        <div class=\"text\">
                            <div class=\"heading\">
                                <a href=\"#\">Dmitry Ivaniuk</a>
                                <span class=\"date\">08:27</span>
                            </div>                                    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"image\">
                            <img src=\"{{ asset('uploads/photos/avatar.png') }}\" alt=\"Dmitry Ivaniuk\"/>
                        </div>                                
                        <div class=\"text\">
                            <div class=\"heading\">
                                <a href=\"#\">Dmitry Ivaniuk</a>
                                <span class=\"date\">08:27</span>
                            </div>                                    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"image\">
                            <img src=\"{{ asset('uploads/photos/avatar.png') }}\" alt=\"Dmitry Ivaniuk\"/>
                        </div>                                
                        <div class=\"text\">
                            <div class=\"heading\">
                                <a href=\"#\">Dmitry Ivaniuk</a>
                                <span class=\"date\">08:27</span>
                            </div>                                    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"image\">
                            <img src=\"{{ asset('uploads/photos/avatar.png') }}\" alt=\"Dmitry Ivaniuk\"/>
                        </div>                                
                        <div class=\"text\">
                            <div class=\"heading\">
                                <a href=\"#\">Dmitry Ivaniuk</a>
                                <span class=\"date\">08:27</span>
                            </div>                                    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"image\">
                            <img src=\"{{ asset('uploads/photos/avatar.png') }}\" alt=\"Dmitry Ivaniuk\"/>
                        </div>                                
                        <div class=\"text\">
                            <div class=\"heading\">
                                <a href=\"#\">Dmitry Ivaniuk</a>
                                <span class=\"date\">08:27</span>
                            </div>                                    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"image\">
                            <img src=\"{{ asset('uploads/photos/avatar.png') }}\" alt=\"Dmitry Ivaniuk\"/>
                        </div>                                
                        <div class=\"text\">
                            <div class=\"heading\">
                                <a href=\"#\">Dmitry Ivaniuk</a>
                                <span class=\"date\">08:27</span>
                            </div>                                    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                        </div>
                    </div>

                </div>

            </div>
    </div>

{% endblock %}

{% block javascripts %}
    <script>
        \$('.active').removeClass('active');
        \$('.info').addClass('active');
    </script>
{% endblock%}", ":travailrealise:showParent.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/travailrealise/showParent.html.twig");
    }
}
