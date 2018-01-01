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
        $__internal_85a030c13f06a9c24b8a28ee74f70684b9d8e0561875f55210efd77d531cafcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85a030c13f06a9c24b8a28ee74f70684b9d8e0561875f55210efd77d531cafcd->enter($__internal_85a030c13f06a9c24b8a28ee74f70684b9d8e0561875f55210efd77d531cafcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":travailrealise:showParent.html.twig"));

        $__internal_642dd8a8fdfec37977cfcd2b9805610d29eaae0c64393cf10698987b526502a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642dd8a8fdfec37977cfcd2b9805610d29eaae0c64393cf10698987b526502a6->enter($__internal_642dd8a8fdfec37977cfcd2b9805610d29eaae0c64393cf10698987b526502a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":travailrealise:showParent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85a030c13f06a9c24b8a28ee74f70684b9d8e0561875f55210efd77d531cafcd->leave($__internal_85a030c13f06a9c24b8a28ee74f70684b9d8e0561875f55210efd77d531cafcd_prof);

        
        $__internal_642dd8a8fdfec37977cfcd2b9805610d29eaae0c64393cf10698987b526502a6->leave($__internal_642dd8a8fdfec37977cfcd2b9805610d29eaae0c64393cf10698987b526502a6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_45a620608924f1bb821b47b81f1b0c55267dc53e56cb4a16d514ab4996f44264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a620608924f1bb821b47b81f1b0c55267dc53e56cb4a16d514ab4996f44264->enter($__internal_45a620608924f1bb821b47b81f1b0c55267dc53e56cb4a16d514ab4996f44264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fbadff530b0dd6bf1a9fcb5b945dad377d5278f88100f07587aa91c4ac0e614a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbadff530b0dd6bf1a9fcb5b945dad377d5278f88100f07587aa91c4ac0e614a->enter($__internal_fbadff530b0dd6bf1a9fcb5b945dad377d5278f88100f07587aa91c4ac0e614a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fbadff530b0dd6bf1a9fcb5b945dad377d5278f88100f07587aa91c4ac0e614a->leave($__internal_fbadff530b0dd6bf1a9fcb5b945dad377d5278f88100f07587aa91c4ac0e614a_prof);

        
        $__internal_45a620608924f1bb821b47b81f1b0c55267dc53e56cb4a16d514ab4996f44264->leave($__internal_45a620608924f1bb821b47b81f1b0c55267dc53e56cb4a16d514ab4996f44264_prof);

    }

    // line 138
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cca99df0759394ef74e0fef2b0d3b4f63f4a918e80ab32e0546fa3550ad67e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cca99df0759394ef74e0fef2b0d3b4f63f4a918e80ab32e0546fa3550ad67e82->enter($__internal_cca99df0759394ef74e0fef2b0d3b4f63f4a918e80ab32e0546fa3550ad67e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3051790103d46a21be2b5742cd8c0b3051e0c74a549166b65d8abda299350f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3051790103d46a21be2b5742cd8c0b3051e0c74a549166b65d8abda299350f27->enter($__internal_3051790103d46a21be2b5742cd8c0b3051e0c74a549166b65d8abda299350f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 139
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.info').addClass('active');
    </script>
";
        
        $__internal_3051790103d46a21be2b5742cd8c0b3051e0c74a549166b65d8abda299350f27->leave($__internal_3051790103d46a21be2b5742cd8c0b3051e0c74a549166b65d8abda299350f27_prof);

        
        $__internal_cca99df0759394ef74e0fef2b0d3b4f63f4a918e80ab32e0546fa3550ad67e82->leave($__internal_cca99df0759394ef74e0fef2b0d3b4f63f4a918e80ab32e0546fa3550ad67e82_prof);

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
