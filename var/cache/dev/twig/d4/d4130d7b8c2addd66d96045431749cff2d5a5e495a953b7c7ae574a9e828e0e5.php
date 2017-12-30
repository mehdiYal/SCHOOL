<?php

/* travailrealise/showParent.html.twig */
class __TwigTemplate_ba3cb91e84458f12b9ce4f347e806813da49b3b8a79571302ed3b7a6c6b1caeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseParent.html.twig", "travailrealise/showParent.html.twig", 1);
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
        $__internal_1662c8faca1b7d5dedec07d264ecf1770cb102e6c1b13d05fb77ec2613c33070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1662c8faca1b7d5dedec07d264ecf1770cb102e6c1b13d05fb77ec2613c33070->enter($__internal_1662c8faca1b7d5dedec07d264ecf1770cb102e6c1b13d05fb77ec2613c33070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "travailrealise/showParent.html.twig"));

        $__internal_88839bf386080a1838d66517667d23568e312657ead7d3b01ca8b88bae298179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88839bf386080a1838d66517667d23568e312657ead7d3b01ca8b88bae298179->enter($__internal_88839bf386080a1838d66517667d23568e312657ead7d3b01ca8b88bae298179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "travailrealise/showParent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1662c8faca1b7d5dedec07d264ecf1770cb102e6c1b13d05fb77ec2613c33070->leave($__internal_1662c8faca1b7d5dedec07d264ecf1770cb102e6c1b13d05fb77ec2613c33070_prof);

        
        $__internal_88839bf386080a1838d66517667d23568e312657ead7d3b01ca8b88bae298179->leave($__internal_88839bf386080a1838d66517667d23568e312657ead7d3b01ca8b88bae298179_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa6e0bb60a594f98d48f3d19d9ce5d92fbccc8fe615f14be6bc4139e4bdb3b41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6e0bb60a594f98d48f3d19d9ce5d92fbccc8fe615f14be6bc4139e4bdb3b41->enter($__internal_aa6e0bb60a594f98d48f3d19d9ce5d92fbccc8fe615f14be6bc4139e4bdb3b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a3a693353b83c6185f0b6ce0f7b227c41222df6f9ab253cfa6d601f76d7341c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3a693353b83c6185f0b6ce0f7b227c41222df6f9ab253cfa6d601f76d7341c->enter($__internal_1a3a693353b83c6185f0b6ce0f7b227c41222df6f9ab253cfa6d601f76d7341c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1a3a693353b83c6185f0b6ce0f7b227c41222df6f9ab253cfa6d601f76d7341c->leave($__internal_1a3a693353b83c6185f0b6ce0f7b227c41222df6f9ab253cfa6d601f76d7341c_prof);

        
        $__internal_aa6e0bb60a594f98d48f3d19d9ce5d92fbccc8fe615f14be6bc4139e4bdb3b41->leave($__internal_aa6e0bb60a594f98d48f3d19d9ce5d92fbccc8fe615f14be6bc4139e4bdb3b41_prof);

    }

    // line 138
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3d762c37b43aa86fc20af38e6f5e658a7d82cbb96e215fbb35882d2ae34d8176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d762c37b43aa86fc20af38e6f5e658a7d82cbb96e215fbb35882d2ae34d8176->enter($__internal_3d762c37b43aa86fc20af38e6f5e658a7d82cbb96e215fbb35882d2ae34d8176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2edb88da22f4135ccf6fbb677d2bab0df3973ef30163a064b02c435f8cd4311e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2edb88da22f4135ccf6fbb677d2bab0df3973ef30163a064b02c435f8cd4311e->enter($__internal_2edb88da22f4135ccf6fbb677d2bab0df3973ef30163a064b02c435f8cd4311e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 139
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.info').addClass('active');
    </script>
";
        
        $__internal_2edb88da22f4135ccf6fbb677d2bab0df3973ef30163a064b02c435f8cd4311e->leave($__internal_2edb88da22f4135ccf6fbb677d2bab0df3973ef30163a064b02c435f8cd4311e_prof);

        
        $__internal_3d762c37b43aa86fc20af38e6f5e658a7d82cbb96e215fbb35882d2ae34d8176->leave($__internal_3d762c37b43aa86fc20af38e6f5e658a7d82cbb96e215fbb35882d2ae34d8176_prof);

    }

    public function getTemplateName()
    {
        return "travailrealise/showParent.html.twig";
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
{% endblock%}", "travailrealise/showParent.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/travailrealise/showParent.html.twig");
    }
}
