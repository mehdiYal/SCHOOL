<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_32465da69bdaadb8328134d897ab9d1c30ae3f3fa165e6ddb60583419ebe06f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d6756f161479c588dfbe1d528d0ab2790f83343a2f88707fe1a98a3b8e2f749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d6756f161479c588dfbe1d528d0ab2790f83343a2f88707fe1a98a3b8e2f749->enter($__internal_9d6756f161479c588dfbe1d528d0ab2790f83343a2f88707fe1a98a3b8e2f749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_49df86970d96400be396dd1455a76415e4a251fa6814b42e0c5ceccad5e2599c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49df86970d96400be396dd1455a76415e4a251fa6814b42e0c5ceccad5e2599c->enter($__internal_49df86970d96400be396dd1455a76415e4a251fa6814b42e0c5ceccad5e2599c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_9d6756f161479c588dfbe1d528d0ab2790f83343a2f88707fe1a98a3b8e2f749->leave($__internal_9d6756f161479c588dfbe1d528d0ab2790f83343a2f88707fe1a98a3b8e2f749_prof);

        
        $__internal_49df86970d96400be396dd1455a76415e4a251fa6814b42e0c5ceccad5e2599c->leave($__internal_49df86970d96400be396dd1455a76415e4a251fa6814b42e0c5ceccad5e2599c_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
