<?php

/* :parentsViews:listParents.html.twig */
class __TwigTemplate_2d85ed918ecb18aa6e838a67d3dcbc4338bca602b94cd5ccddf5fa45ce15a03c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":parentsViews:listParents.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
            'active' => array($this, 'block_active'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseList.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb46124047be053bc85b84ea0e965576b46de6efd829cd211a2cb4e0d0c5dddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb46124047be053bc85b84ea0e965576b46de6efd829cd211a2cb4e0d0c5dddb->enter($__internal_eb46124047be053bc85b84ea0e965576b46de6efd829cd211a2cb4e0d0c5dddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:listParents.html.twig"));

        $__internal_c8d1acb2a4b91ad8e63e9876dbe7921f5d6f241ba10661fa6583cd2dc2b68816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d1acb2a4b91ad8e63e9876dbe7921f5d6f241ba10661fa6583cd2dc2b68816->enter($__internal_c8d1acb2a4b91ad8e63e9876dbe7921f5d6f241ba10661fa6583cd2dc2b68816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:listParents.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb46124047be053bc85b84ea0e965576b46de6efd829cd211a2cb4e0d0c5dddb->leave($__internal_eb46124047be053bc85b84ea0e965576b46de6efd829cd211a2cb4e0d0c5dddb_prof);

        
        $__internal_c8d1acb2a4b91ad8e63e9876dbe7921f5d6f241ba10661fa6583cd2dc2b68816->leave($__internal_c8d1acb2a4b91ad8e63e9876dbe7921f5d6f241ba10661fa6583cd2dc2b68816_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6cad9713fd39bbed9a04e32f7de466ba7b3737a30c8d07bb7b4506bd8936b33f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cad9713fd39bbed9a04e32f7de466ba7b3737a30c8d07bb7b4506bd8936b33f->enter($__internal_6cad9713fd39bbed9a04e32f7de466ba7b3737a30c8d07bb7b4506bd8936b33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7bfecc73285b9d28119a57ae06ab3078c6f81f2807ea7ae7af0bf62863218fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bfecc73285b9d28119a57ae06ab3078c6f81f2807ea7ae7af0bf62863218fb2->enter($__internal_7bfecc73285b9d28119a57ae06ab3078c6f81f2807ea7ae7af0bf62863218fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parents"), "html", null, true);
        echo "
";
        
        $__internal_7bfecc73285b9d28119a57ae06ab3078c6f81f2807ea7ae7af0bf62863218fb2->leave($__internal_7bfecc73285b9d28119a57ae06ab3078c6f81f2807ea7ae7af0bf62863218fb2_prof);

        
        $__internal_6cad9713fd39bbed9a04e32f7de466ba7b3737a30c8d07bb7b4506bd8936b33f->leave($__internal_6cad9713fd39bbed9a04e32f7de466ba7b3737a30c8d07bb7b4506bd8936b33f_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_279ec6c8d609b2c2d206acbd2409e48c4390fdd3a966ba8579e4786dc6b21fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_279ec6c8d609b2c2d206acbd2409e48c4390fdd3a966ba8579e4786dc6b21fe2->enter($__internal_279ec6c8d609b2c2d206acbd2409e48c4390fdd3a966ba8579e4786dc6b21fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_04903aa3f5930e5e42ebef788b2f26f18074842f466778dd2d07cb1ab54cdd55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04903aa3f5930e5e42ebef788b2f26f18074842f466778dd2d07cb1ab54cdd55->enter($__internal_04903aa3f5930e5e42ebef788b2f26f18074842f466778dd2d07cb1ab54cdd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 8
        echo "
\t
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Enfants dans l'ecole</th>
                    <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "parents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["parent"]) {
            // line 23
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["parent"], "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["parent"], "eleves", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEleve", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["e"], "nom", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "prenom", array()), "html", null, true);
                echo "</a></li>\t
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editParental", array("id" => $this->getAttribute($context["parent"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeParental", array("id" => $this->getAttribute($context["parent"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileParental", array("id" => $this->getAttribute($context["parent"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </tbody>
        </table>                                    
    </div>
";
        
        $__internal_04903aa3f5930e5e42ebef788b2f26f18074842f466778dd2d07cb1ab54cdd55->leave($__internal_04903aa3f5930e5e42ebef788b2f26f18074842f466778dd2d07cb1ab54cdd55_prof);

        
        $__internal_279ec6c8d609b2c2d206acbd2409e48c4390fdd3a966ba8579e4786dc6b21fe2->leave($__internal_279ec6c8d609b2c2d206acbd2409e48c4390fdd3a966ba8579e4786dc6b21fe2_prof);

    }

    // line 54
    public function block_active($context, array $blocks = array())
    {
        $__internal_a8e2667f66cb0d54064bee7b100269068c59c04e959dca6484d63993bb07424e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8e2667f66cb0d54064bee7b100269068c59c04e959dca6484d63993bb07424e->enter($__internal_a8e2667f66cb0d54064bee7b100269068c59c04e959dca6484d63993bb07424e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_cb0a617dbcfce0b2c4d464564f9b92700a9cd7de5d1e12f637bb6151e3d6bc82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0a617dbcfce0b2c4d464564f9b92700a9cd7de5d1e12f637bb6151e3d6bc82->enter($__internal_cb0a617dbcfce0b2c4d464564f9b92700a9cd7de5d1e12f637bb6151e3d6bc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 55
        echo "\t<script>
\t\t\$('.active').removeClass('active');
        \$('.parent').addClass('active');
        \$('.listPar').addClass('active');
\t</script>
";
        
        $__internal_cb0a617dbcfce0b2c4d464564f9b92700a9cd7de5d1e12f637bb6151e3d6bc82->leave($__internal_cb0a617dbcfce0b2c4d464564f9b92700a9cd7de5d1e12f637bb6151e3d6bc82_prof);

        
        $__internal_a8e2667f66cb0d54064bee7b100269068c59c04e959dca6484d63993bb07424e->leave($__internal_a8e2667f66cb0d54064bee7b100269068c59c04e959dca6484d63993bb07424e_prof);

    }

    public function getTemplateName()
    {
        return ":parentsViews:listParents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 55,  178 => 54,  165 => 49,  153 => 43,  145 => 38,  137 => 33,  132 => 30,  119 => 28,  115 => 27,  107 => 24,  104 => 23,  100 => 22,  93 => 18,  89 => 17,  85 => 16,  75 => 8,  66 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseList.html.twig' %}

{% block title %}
\t{{'list'|trans}} {{'parents'|trans}}
{% endblock %}

{% block bodyList %}

\t
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Enfants dans l'ecole</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>{{'profile'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for parent in app.user.ecole.parents %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ parent.nom|upper}} {{ parent.prenom}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t{% for e in parent.eleves %}
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('profileEleve',{'id':e.id})}}\">{{ e.nom|upper}} {{ e.prenom}}</a></li>\t
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('editParental',{'id':parent.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('removeParental',{'id':parent.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('profileParental',{'id':parent.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-user\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
{% endblock %} 

{% block active %}
\t<script>
\t\t\$('.active').removeClass('active');
        \$('.parent').addClass('active');
        \$('.listPar').addClass('active');
\t</script>
{% endblock%}", ":parentsViews:listParents.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/parentsViews/listParents.html.twig");
    }
}
