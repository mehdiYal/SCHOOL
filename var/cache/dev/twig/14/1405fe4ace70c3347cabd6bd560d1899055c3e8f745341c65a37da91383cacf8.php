<?php

/* KnpPaginatorBundle:Pagination:bulma_pagination.html.twig */
class __TwigTemplate_ddf1ba067120e6acee1e89a86cdd8f9cce6abb39c47c06f174f50b58fd4ffa5b extends Twig_Template
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
        $__internal_339f0983b510d17467178250119627603cdfe238c6d1a1c2e91bad2524092915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_339f0983b510d17467178250119627603cdfe238c6d1a1c2e91bad2524092915->enter($__internal_339f0983b510d17467178250119627603cdfe238c6d1a1c2e91bad2524092915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:bulma_pagination.html.twig"));

        $__internal_8531a879068ba3a166cffad46d26ae2b69ff56d5f044abf390f0af59fdbc8540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8531a879068ba3a166cffad46d26ae2b69ff56d5f044abf390f0af59fdbc8540->enter($__internal_8531a879068ba3a166cffad46d26ae2b69ff56d5f044abf390f0af59fdbc8540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:bulma_pagination.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 4
            echo "    <nav class=\"pagination\">
        ";
            // line 5
            if (array_key_exists("previous", $context)) {
                // line 6
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&lt;</a>
        ";
            } else {
                // line 8
                echo "            <a class=\"button\" disabled>&lt;</a>
        ";
            }
            // line 10
            echo "        ";
            if (array_key_exists("next", $context)) {
                // line 11
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">&gt;</a>
        ";
            } else {
                // line 13
                echo "            <a class=\"button\" disabled>&gt;</a>
        ";
            }
            // line 15
            echo "        <ul>
            <li>
                <a class=\"button\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
            echo "\">1</a>
            </li>
            ";
            // line 19
            if ((($this->getAttribute((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")), 0, array(), "array") - (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))) >= 2)) {
                // line 20
                echo "                <li>
                    <span>…</span>
                </li>
            ";
            }
            // line 24
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 25
                echo "                ";
                if ((((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")) != $context["page"]) && ($context["page"] != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                    // line 26
                    echo "                    <li>
                        <a class=\"button\"
                           href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                // line 31
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            ";
            if ((((isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")) - $this->getAttribute((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")), (twig_length_filter($this->env, (isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange"))) - 1), array(), "array")) >= 2)) {
                // line 33
                echo "                <li>
                    <span>…</span>
                </li>
            ";
            }
            // line 37
            echo "            <li>
                <a class=\"button\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")), "html", null, true);
            echo "</a>
            </li>
        </ul>
    </nav>
";
        }
        
        $__internal_339f0983b510d17467178250119627603cdfe238c6d1a1c2e91bad2524092915->leave($__internal_339f0983b510d17467178250119627603cdfe238c6d1a1c2e91bad2524092915_prof);

        
        $__internal_8531a879068ba3a166cffad46d26ae2b69ff56d5f044abf390f0af59fdbc8540->leave($__internal_8531a879068ba3a166cffad46d26ae2b69ff56d5f044abf390f0af59fdbc8540_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:bulma_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  110 => 37,  104 => 33,  101 => 32,  95 => 31,  87 => 28,  83 => 26,  80 => 25,  75 => 24,  69 => 20,  67 => 19,  62 => 17,  58 => 15,  54 => 13,  48 => 11,  45 => 10,  41 => 8,  35 => 6,  33 => 5,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# bulma Sliding pagination control implementation #}

{% if pageCount > 1 %}
    <nav class=\"pagination\">
        {% if previous is defined %}
            <a class=\"button\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">&lt;</a>
        {% else %}
            <a class=\"button\" disabled>&lt;</a>
        {% endif %}
        {% if next is defined %}
            <a class=\"button\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">&gt;</a>
        {% else %}
            <a class=\"button\" disabled>&gt;</a>
        {% endif %}
        <ul>
            <li>
                <a class=\"button\" href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">1</a>
            </li>
            {% if pagesInRange[0] - first >= 2 %}
                <li>
                    <span>…</span>
                </li>
            {% endif %}
            {% for page in pagesInRange %}
                {% if first != page and page != last %}
                    <li>
                        <a class=\"button\"
                           href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                    </li>
                {% endif %}
            {% endfor %}
            {% if  last - pagesInRange[pagesInRange|length - 1] >= 2 %}
                <li>
                    <span>…</span>
                </li>
            {% endif %}
            <li>
                <a class=\"button\" href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">{{ last }}</a>
            </li>
        </ul>
    </nav>
{% endif %}
", "KnpPaginatorBundle:Pagination:bulma_pagination.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/bulma_pagination.html.twig");
    }
}
