<?php

/* KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_sortable_link.html.twig */
class __TwigTemplate_134fcc74f6f1dfdb3603ee9f865dac484bbede26698dba35b037f62123d41962 extends Twig_Template
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
        $__internal_573cdee058a3d93802129aa782947ba59d5795bdfd37697c51600a79f2114ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_573cdee058a3d93802129aa782947ba59d5795bdfd37697c51600a79f2114ccd->enter($__internal_573cdee058a3d93802129aa782947ba59d5795bdfd37697c51600a79f2114ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_sortable_link.html.twig"));

        $__internal_7b197beb3f1ad9c36a94586fe026a0b94032ca159e1e86324f18cb1915aaf07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b197beb3f1ad9c36a94586fe026a0b94032ca159e1e86324f18cb1915aaf07d->enter($__internal_7b197beb3f1ad9c36a94586fe026a0b94032ca159e1e86324f18cb1915aaf07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_sortable_link.html.twig"));

        // line 9
        echo "
<a";
        // line 10
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
        echo " style=\"color: #000;\">
    <span class=\"pull-right\">
        ";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sort"), "method") == (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))) {
            // line 13
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "direction"), "method") == "desc")) {
                // line 14
                echo "                <i class=\"glyphicon glyphicon-sort-by-attributes-alt\"></i>
            ";
            } else {
                // line 16
                echo "                <i class=\"glyphicon glyphicon-sort-by-attributes\"></i>
            ";
            }
            // line 18
            echo "        ";
        } else {
            // line 19
            echo "            <i class=\"glyphicon glyphicon-sort\" style=\"color: #d2d6de;\"></i>
        ";
        }
        // line 21
        echo "    </span>
    ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "
</a>
";
        
        $__internal_573cdee058a3d93802129aa782947ba59d5795bdfd37697c51600a79f2114ccd->leave($__internal_573cdee058a3d93802129aa782947ba59d5795bdfd37697c51600a79f2114ccd_prof);

        
        $__internal_7b197beb3f1ad9c36a94586fe026a0b94032ca159e1e86324f18cb1915aaf07d->leave($__internal_7b197beb3f1ad9c36a94586fe026a0b94032ca159e1e86324f18cb1915aaf07d_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 22,  64 => 21,  60 => 19,  57 => 18,  53 => 16,  49 => 14,  46 => 13,  44 => 12,  28 => 10,  25 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Twitter Bootstrap v3 Sorting control implementation.
 *
 * @author Afolabi Olayinka <folabiolayinka@gmail.com>
 */
#}

<a{% for attr, value  in options %} {{ attr }}=\"{{ value }}\"{% endfor %} style=\"color: #000;\">
    <span class=\"pull-right\">
        {% if app.request.get('sort') == key %}
            {% if app.request.get('direction') == 'desc' %}
                <i class=\"glyphicon glyphicon-sort-by-attributes-alt\"></i>
            {% else %}
                <i class=\"glyphicon glyphicon-sort-by-attributes\"></i>
            {% endif %}
        {% else %}
            <i class=\"glyphicon glyphicon-sort\" style=\"color: #d2d6de;\"></i>
        {% endif %}
    </span>
    {{ title }}
</a>
", "KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_sortable_link.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/twitter_bootstrap_v3_sortable_link.html.twig");
    }
}
