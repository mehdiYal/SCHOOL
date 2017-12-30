<?php

/* :parentsViews:listParents.html.twig */
class __TwigTemplate_e57124e90ef78621efe034c9cda88758b45b56e8e4849fce7aa1cbc2dbbc65f1 extends Twig_Template
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
        $__internal_43940a8f72292c9c63da6a62366736086735010a2f65db3a1bb0e18efb96fc72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43940a8f72292c9c63da6a62366736086735010a2f65db3a1bb0e18efb96fc72->enter($__internal_43940a8f72292c9c63da6a62366736086735010a2f65db3a1bb0e18efb96fc72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:listParents.html.twig"));

        $__internal_7d582f717979f6654ce20bec622bbb784a451af63283a587dc3a24d2b9d5bae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d582f717979f6654ce20bec622bbb784a451af63283a587dc3a24d2b9d5bae1->enter($__internal_7d582f717979f6654ce20bec622bbb784a451af63283a587dc3a24d2b9d5bae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:listParents.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43940a8f72292c9c63da6a62366736086735010a2f65db3a1bb0e18efb96fc72->leave($__internal_43940a8f72292c9c63da6a62366736086735010a2f65db3a1bb0e18efb96fc72_prof);

        
        $__internal_7d582f717979f6654ce20bec622bbb784a451af63283a587dc3a24d2b9d5bae1->leave($__internal_7d582f717979f6654ce20bec622bbb784a451af63283a587dc3a24d2b9d5bae1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_62cadb16a097a6e133eafd9c2946c69a10ba2931779b347371dd5a5d99b8a0b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62cadb16a097a6e133eafd9c2946c69a10ba2931779b347371dd5a5d99b8a0b3->enter($__internal_62cadb16a097a6e133eafd9c2946c69a10ba2931779b347371dd5a5d99b8a0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50a244dbd63d30ef5970f2ddd391843b6f668e07e708d4d7561f459bdf36bbaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a244dbd63d30ef5970f2ddd391843b6f668e07e708d4d7561f459bdf36bbaf->enter($__internal_50a244dbd63d30ef5970f2ddd391843b6f668e07e708d4d7561f459bdf36bbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parents"), "html", null, true);
        echo "
";
        
        $__internal_50a244dbd63d30ef5970f2ddd391843b6f668e07e708d4d7561f459bdf36bbaf->leave($__internal_50a244dbd63d30ef5970f2ddd391843b6f668e07e708d4d7561f459bdf36bbaf_prof);

        
        $__internal_62cadb16a097a6e133eafd9c2946c69a10ba2931779b347371dd5a5d99b8a0b3->leave($__internal_62cadb16a097a6e133eafd9c2946c69a10ba2931779b347371dd5a5d99b8a0b3_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_dbe5bc17cd20ece7b980fc3d7dfcb7d35ede7d0f1493684f57bda695cb023980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbe5bc17cd20ece7b980fc3d7dfcb7d35ede7d0f1493684f57bda695cb023980->enter($__internal_dbe5bc17cd20ece7b980fc3d7dfcb7d35ede7d0f1493684f57bda695cb023980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_12c01d67cb27f4d6eeb331670fce14dd209075c436345c10ef15b7a537c38e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c01d67cb27f4d6eeb331670fce14dd209075c436345c10ef15b7a537c38e66->enter($__internal_12c01d67cb27f4d6eeb331670fce14dd209075c436345c10ef15b7a537c38e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        
        $__internal_12c01d67cb27f4d6eeb331670fce14dd209075c436345c10ef15b7a537c38e66->leave($__internal_12c01d67cb27f4d6eeb331670fce14dd209075c436345c10ef15b7a537c38e66_prof);

        
        $__internal_dbe5bc17cd20ece7b980fc3d7dfcb7d35ede7d0f1493684f57bda695cb023980->leave($__internal_dbe5bc17cd20ece7b980fc3d7dfcb7d35ede7d0f1493684f57bda695cb023980_prof);

    }

    // line 54
    public function block_active($context, array $blocks = array())
    {
        $__internal_d39b5d5a086ba8663657311f21062f5feffdeb70fdfc37f60ce9e7e557880977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d39b5d5a086ba8663657311f21062f5feffdeb70fdfc37f60ce9e7e557880977->enter($__internal_d39b5d5a086ba8663657311f21062f5feffdeb70fdfc37f60ce9e7e557880977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_97de2c1ccee4a4ef75dadc17a54a5fb905d42a2764de4326a37a63ed429d30da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97de2c1ccee4a4ef75dadc17a54a5fb905d42a2764de4326a37a63ed429d30da->enter($__internal_97de2c1ccee4a4ef75dadc17a54a5fb905d42a2764de4326a37a63ed429d30da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 55
        echo "\t<script>
\t\t\$('.active').removeClass('active');
        \$('.parent').addClass('active');
        \$('.listPar').addClass('active');
\t</script>
";
        
        $__internal_97de2c1ccee4a4ef75dadc17a54a5fb905d42a2764de4326a37a63ed429d30da->leave($__internal_97de2c1ccee4a4ef75dadc17a54a5fb905d42a2764de4326a37a63ed429d30da_prof);

        
        $__internal_d39b5d5a086ba8663657311f21062f5feffdeb70fdfc37f60ce9e7e557880977->leave($__internal_d39b5d5a086ba8663657311f21062f5feffdeb70fdfc37f60ce9e7e557880977_prof);

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
{% endblock%}", ":parentsViews:listParents.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/parentsViews/listParents.html.twig");
    }
}
