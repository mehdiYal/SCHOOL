<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_31e803fbe2b2e0a7eac96529ce9d1f9f73b12fd5270c16c7b7cc60078540381c extends Twig_Template
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
        $__internal_85c7e835ef790815cbbc76e80fc09c7ee6249f2e364cd5a28bc1b7b0c5eca0c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c7e835ef790815cbbc76e80fc09c7ee6249f2e364cd5a28bc1b7b0c5eca0c4->enter($__internal_85c7e835ef790815cbbc76e80fc09c7ee6249f2e364cd5a28bc1b7b0c5eca0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_73ef9a36ca4288aa55f7dd7a89e105be7c3b1accc027652abdf88be5c65c8483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ef9a36ca4288aa55f7dd7a89e105be7c3b1accc027652abdf88be5c65c8483->enter($__internal_73ef9a36ca4288aa55f7dd7a89e105be7c3b1accc027652abdf88be5c65c8483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_85c7e835ef790815cbbc76e80fc09c7ee6249f2e364cd5a28bc1b7b0c5eca0c4->leave($__internal_85c7e835ef790815cbbc76e80fc09c7ee6249f2e364cd5a28bc1b7b0c5eca0c4_prof);

        
        $__internal_73ef9a36ca4288aa55f7dd7a89e105be7c3b1accc027652abdf88be5c65c8483->leave($__internal_73ef9a36ca4288aa55f7dd7a89e105be7c3b1accc027652abdf88be5c65c8483_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Group/list_content.html.twig");
    }
}
