<?php

/* :payment:payment.html.twig */
class __TwigTemplate_e9fd80e3859f012d009ea10a9dc19dbe6252a8af8d38bd3b7ecfbdb1889d10ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":payment:payment.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a065f10054e640c456eb946f2551ef7f600fca318dfadee0987e5293fec8f799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a065f10054e640c456eb946f2551ef7f600fca318dfadee0987e5293fec8f799->enter($__internal_a065f10054e640c456eb946f2551ef7f600fca318dfadee0987e5293fec8f799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":payment:payment.html.twig"));

        $__internal_d5d3c8ea746ff98dc66a44b2aacc91727741b7aff65f3c0a2b9c04883be00e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d3c8ea746ff98dc66a44b2aacc91727741b7aff65f3c0a2b9c04883be00e55->enter($__internal_d5d3c8ea746ff98dc66a44b2aacc91727741b7aff65f3c0a2b9c04883be00e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":payment:payment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a065f10054e640c456eb946f2551ef7f600fca318dfadee0987e5293fec8f799->leave($__internal_a065f10054e640c456eb946f2551ef7f600fca318dfadee0987e5293fec8f799_prof);

        
        $__internal_d5d3c8ea746ff98dc66a44b2aacc91727741b7aff65f3c0a2b9c04883be00e55->leave($__internal_d5d3c8ea746ff98dc66a44b2aacc91727741b7aff65f3c0a2b9c04883be00e55_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_874ff641bfb20cc3ce0db791e816b92cad3cc8743ed3d92e6f5d3ce10b0db83a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_874ff641bfb20cc3ce0db791e816b92cad3cc8743ed3d92e6f5d3ce10b0db83a->enter($__internal_874ff641bfb20cc3ce0db791e816b92cad3cc8743ed3d92e6f5d3ce10b0db83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_273582eec9106edff8339c80296387427afd7ecebf069339a22314c5b677d94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273582eec9106edff8339c80296387427afd7ecebf069339a22314c5b677d94a->enter($__internal_273582eec9106edff8339c80296387427afd7ecebf069339a22314c5b677d94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-content-wrap\">    
    <div class=\"row\">
    \t<div class=\"col-md-3\">
            
            <!-- START WIDGET MESSAGES -->
            <div class=\"widget widget-default widget-item-icon\" onclick=\"location.href='pages-messages.html';\">
                <div class=\"widget-item-left\">
                    <span class=\"fa fa-envelope\"></span>
                </div>                             
                <div class=\"widget-data\">
                    <div class=\"widget-int num-count\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "fraisDeRestauration", array()), "html", null, true);
        echo "</div>
                    <div class=\"widget-title\">Frais de Restauration</div>
                    <div class=\"widget-subtitle\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "fraisDeRestauration", array()), "html", null, true);
        echo "</div>
                </div>      
                <div class=\"widget-controls\">                                
                    <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                </div>
            </div>                            
            <!-- END WIDGET MESSAGES -->
            
        </div>

        <div class=\"col-md-3\">
            
            <!-- START WIDGET MESSAGES -->
            <div class=\"widget widget-default widget-item-icon\" onclick=\"location.href='pages-messages.html';\">
                <div class=\"widget-item-left\">
                    <span class=\"fa fa-envelope\"></span>
                </div>                             
                <div class=\"widget-data\">
                    <div class=\"widget-int num-count\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "fraisDeScolarite", array()), "html", null, true);
        echo "</div>
                    <div class=\"widget-title\">Frais de Scolarité</div>
                    <div class=\"widget-subtitle\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "fraisDeScolarite", array()), "html", null, true);
        echo "</div>
                </div>      
                <div class=\"widget-controls\">                                
                    <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                </div>
            </div>                            
            <!-- END WIDGET MESSAGES -->
            
        </div>

        <div class=\"col-md-3\">
            
            <!-- START WIDGET MESSAGES -->
            <div class=\"widget widget-default widget-item-icon\" onclick=\"location.href='pages-messages.html';\">
                <div class=\"widget-item-left\">
                    <span class=\"fa fa-envelope\"></span>
                </div>                             
                <div class=\"widget-data\">
                    <div class=\"widget-int num-count\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "fraisDeTransport", array()), "html", null, true);
        echo "</div>
                    <div class=\"widget-title\">Frais de Transport</div>
                    <div class=\"widget-subtitle\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "fraisTransport", array()), "html", null, true);
        echo "</div>
                </div>      
                <div class=\"widget-controls\">                                
                    <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                </div>
            </div>                            
            <!-- END WIDGET MESSAGES -->
            
        </div>
    </div>                   
</div>
";
        
        $__internal_273582eec9106edff8339c80296387427afd7ecebf069339a22314c5b677d94a->leave($__internal_273582eec9106edff8339c80296387427afd7ecebf069339a22314c5b677d94a_prof);

        
        $__internal_874ff641bfb20cc3ce0db791e816b92cad3cc8743ed3d92e6f5d3ce10b0db83a->leave($__internal_874ff641bfb20cc3ce0db791e816b92cad3cc8743ed3d92e6f5d3ce10b0db83a_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_99994df6ff965ee63dfa2ce555e5c3477d2f3b6d5bad3767fdc21205665a882c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99994df6ff965ee63dfa2ce555e5c3477d2f3b6d5bad3767fdc21205665a882c->enter($__internal_99994df6ff965ee63dfa2ce555e5c3477d2f3b6d5bad3767fdc21205665a882c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c174448d493f191e67030f9ca581f1d76c7df253c1d5991ccac45556feea97cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c174448d493f191e67030f9ca581f1d76c7df253c1d5991ccac45556feea97cd->enter($__internal_c174448d493f191e67030f9ca581f1d76c7df253c1d5991ccac45556feea97cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "\t<script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c174448d493f191e67030f9ca581f1d76c7df253c1d5991ccac45556feea97cd->leave($__internal_c174448d493f191e67030f9ca581f1d76c7df253c1d5991ccac45556feea97cd_prof);

        
        $__internal_99994df6ff965ee63dfa2ce555e5c3477d2f3b6d5bad3767fdc21205665a882c->leave($__internal_99994df6ff965ee63dfa2ce555e5c3477d2f3b6d5bad3767fdc21205665a882c_prof);

    }

    public function getTemplateName()
    {
        return ":payment:payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 71,  141 => 70,  119 => 56,  114 => 54,  93 => 36,  88 => 34,  67 => 16,  62 => 14,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

{% block body %}
<div class=\"page-content-wrap\">    
    <div class=\"row\">
    \t<div class=\"col-md-3\">
            
            <!-- START WIDGET MESSAGES -->
            <div class=\"widget widget-default widget-item-icon\" onclick=\"location.href='pages-messages.html';\">
                <div class=\"widget-item-left\">
                    <span class=\"fa fa-envelope\"></span>
                </div>                             
                <div class=\"widget-data\">
                    <div class=\"widget-int num-count\">{{app.user.ecole.fraisDeRestauration}}</div>
                    <div class=\"widget-title\">Frais de Restauration</div>
                    <div class=\"widget-subtitle\">{{app.user.ecole.fraisDeRestauration}}</div>
                </div>      
                <div class=\"widget-controls\">                                
                    <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                </div>
            </div>                            
            <!-- END WIDGET MESSAGES -->
            
        </div>

        <div class=\"col-md-3\">
            
            <!-- START WIDGET MESSAGES -->
            <div class=\"widget widget-default widget-item-icon\" onclick=\"location.href='pages-messages.html';\">
                <div class=\"widget-item-left\">
                    <span class=\"fa fa-envelope\"></span>
                </div>                             
                <div class=\"widget-data\">
                    <div class=\"widget-int num-count\">{{app.user.ecole.fraisDeScolarite}}</div>
                    <div class=\"widget-title\">Frais de Scolarité</div>
                    <div class=\"widget-subtitle\">{{app.user.ecole.fraisDeScolarite}}</div>
                </div>      
                <div class=\"widget-controls\">                                
                    <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                </div>
            </div>                            
            <!-- END WIDGET MESSAGES -->
            
        </div>

        <div class=\"col-md-3\">
            
            <!-- START WIDGET MESSAGES -->
            <div class=\"widget widget-default widget-item-icon\" onclick=\"location.href='pages-messages.html';\">
                <div class=\"widget-item-left\">
                    <span class=\"fa fa-envelope\"></span>
                </div>                             
                <div class=\"widget-data\">
                    <div class=\"widget-int num-count\">{{app.user.ecole.fraisDeTransport}}</div>
                    <div class=\"widget-title\">Frais de Transport</div>
                    <div class=\"widget-subtitle\">{{app.user.ecole.fraisTransport}}</div>
                </div>      
                <div class=\"widget-controls\">                                
                    <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                </div>
            </div>                            
            <!-- END WIDGET MESSAGES -->
            
        </div>
    </div>                   
</div>
{% endblock %}


{% block javascripts %}
\t<script type='text/javascript' src=\"{{ asset('js/plugins/bootstrap/bootstrap-select.js') }}\"></script>
{% endblock %}", ":payment:payment.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/payment/payment.html.twig");
    }
}
