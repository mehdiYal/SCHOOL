<?php

/* :default:index.html.twig */
class __TwigTemplate_cd1a2a933162d1f01647c730e94d2dbbed41d6e1bb6047a5146aa947184f898b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b7b3e28e8dedbfbbb9cdade47ef40c36ea880106e0e08cb9e04889229800129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7b3e28e8dedbfbbb9cdade47ef40c36ea880106e0e08cb9e04889229800129->enter($__internal_9b7b3e28e8dedbfbbb9cdade47ef40c36ea880106e0e08cb9e04889229800129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_3c6cd7f849008a9a22ee2f7f97dd444d32ece800b61229d4741c84c9514fd13e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6cd7f849008a9a22ee2f7f97dd444d32ece800b61229d4741c84c9514fd13e->enter($__internal_3c6cd7f849008a9a22ee2f7f97dd444d32ece800b61229d4741c84c9514fd13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b7b3e28e8dedbfbbb9cdade47ef40c36ea880106e0e08cb9e04889229800129->leave($__internal_9b7b3e28e8dedbfbbb9cdade47ef40c36ea880106e0e08cb9e04889229800129_prof);

        
        $__internal_3c6cd7f849008a9a22ee2f7f97dd444d32ece800b61229d4741c84c9514fd13e->leave($__internal_3c6cd7f849008a9a22ee2f7f97dd444d32ece800b61229d4741c84c9514fd13e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0330556e9fd6accaca47f3f7569dbdef5fbc6b023cfd88870098479c1e635e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0330556e9fd6accaca47f3f7569dbdef5fbc6b023cfd88870098479c1e635e9->enter($__internal_c0330556e9fd6accaca47f3f7569dbdef5fbc6b023cfd88870098479c1e635e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8cc8fe0c4da3277097a3de052dbfe87e150f8e23b96839d337b29d012daa26b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8cc8fe0c4da3277097a3de052dbfe87e150f8e23b96839d337b29d012daa26b->enter($__internal_a8cc8fe0c4da3277097a3de052dbfe87e150f8e23b96839d337b29d012daa26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\" style=\"text-align: center;\">
            <h1>Bienvenue chez Schoolium</h1>
            ";
        // line 7
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 8
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "</h1>
            ";
        }
        // line 10
        echo "        </div>
    </div>
";
        
        $__internal_a8cc8fe0c4da3277097a3de052dbfe87e150f8e23b96839d337b29d012daa26b->leave($__internal_a8cc8fe0c4da3277097a3de052dbfe87e150f8e23b96839d337b29d012daa26b_prof);

        
        $__internal_c0330556e9fd6accaca47f3f7569dbdef5fbc6b023cfd88870098479c1e635e9->leave($__internal_c0330556e9fd6accaca47f3f7569dbdef5fbc6b023cfd88870098479c1e635e9_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\" style=\"text-align: center;\">
            <h1>Bienvenue chez Schoolium</h1>
            {% if  app.user %}
            <h1>{{app.user.nom}}</h1>
            {% endif %}
        </div>
    </div>
{% endblock %}", ":default:index.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/default/index.html.twig");
    }
}
