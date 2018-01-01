<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_58db70d73191baa285f58564cd5bedf3c010968ea76e06096b5f13bc609f7283 extends Twig_Template
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
        $__internal_c8f624a2516b8b580e1218c8f3a1be4037718b7544032ccc38986b944f08aca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f624a2516b8b580e1218c8f3a1be4037718b7544032ccc38986b944f08aca9->enter($__internal_c8f624a2516b8b580e1218c8f3a1be4037718b7544032ccc38986b944f08aca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_e05d5bfa38d4bcb7ab202690ba5a11c0fc0ab45076bb47c0d03e83453011e2a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05d5bfa38d4bcb7ab202690ba5a11c0fc0ab45076bb47c0d03e83453011e2a9->enter($__internal_e05d5bfa38d4bcb7ab202690ba5a11c0fc0ab45076bb47c0d03e83453011e2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

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
        
        $__internal_c8f624a2516b8b580e1218c8f3a1be4037718b7544032ccc38986b944f08aca9->leave($__internal_c8f624a2516b8b580e1218c8f3a1be4037718b7544032ccc38986b944f08aca9_prof);

        
        $__internal_e05d5bfa38d4bcb7ab202690ba5a11c0fc0ab45076bb47c0d03e83453011e2a9->leave($__internal_e05d5bfa38d4bcb7ab202690ba5a11c0fc0ab45076bb47c0d03e83453011e2a9_prof);

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
", "FOSUserBundle:Group:list_content.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Group/list_content.html.twig");
    }
}
