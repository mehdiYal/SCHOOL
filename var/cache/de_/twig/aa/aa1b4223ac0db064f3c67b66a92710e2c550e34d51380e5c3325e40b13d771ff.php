<?php

/* :enseignantsViews:listEnseignants.html.twig */
class __TwigTemplate_385d38be0ad602b28be623685f50c7d1127eb997b908c2a2a3a93b5efdb42e7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":enseignantsViews:listEnseignants.html.twig", 1);
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
        $__internal_75bd7fc333bc749e4317d39b34b30d68b6c7ef7b6c60ab26bebdc25dffcff00f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75bd7fc333bc749e4317d39b34b30d68b6c7ef7b6c60ab26bebdc25dffcff00f->enter($__internal_75bd7fc333bc749e4317d39b34b30d68b6c7ef7b6c60ab26bebdc25dffcff00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listEnseignants.html.twig"));

        $__internal_2f08617ace0c67afd08286c15c4cfe1c623d51fb0524f1e9d46abde06cbb05ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f08617ace0c67afd08286c15c4cfe1c623d51fb0524f1e9d46abde06cbb05ca->enter($__internal_2f08617ace0c67afd08286c15c4cfe1c623d51fb0524f1e9d46abde06cbb05ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listEnseignants.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75bd7fc333bc749e4317d39b34b30d68b6c7ef7b6c60ab26bebdc25dffcff00f->leave($__internal_75bd7fc333bc749e4317d39b34b30d68b6c7ef7b6c60ab26bebdc25dffcff00f_prof);

        
        $__internal_2f08617ace0c67afd08286c15c4cfe1c623d51fb0524f1e9d46abde06cbb05ca->leave($__internal_2f08617ace0c67afd08286c15c4cfe1c623d51fb0524f1e9d46abde06cbb05ca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c6b4a1938d2a8515ee6d5ffaf5019129fb6ecb859de3610cb1e8a2fd7719834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6b4a1938d2a8515ee6d5ffaf5019129fb6ecb859de3610cb1e8a2fd7719834->enter($__internal_2c6b4a1938d2a8515ee6d5ffaf5019129fb6ecb859de3610cb1e8a2fd7719834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4da7ec23f9e9d1055f5c7960ca4a379efdb50a7b9fdd44ec4a0c469ee7b9c525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da7ec23f9e9d1055f5c7960ca4a379efdb50a7b9fdd44ec4a0c469ee7b9c525->enter($__internal_4da7ec23f9e9d1055f5c7960ca4a379efdb50a7b9fdd44ec4a0c469ee7b9c525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "
";
        
        $__internal_4da7ec23f9e9d1055f5c7960ca4a379efdb50a7b9fdd44ec4a0c469ee7b9c525->leave($__internal_4da7ec23f9e9d1055f5c7960ca4a379efdb50a7b9fdd44ec4a0c469ee7b9c525_prof);

        
        $__internal_2c6b4a1938d2a8515ee6d5ffaf5019129fb6ecb859de3610cb1e8a2fd7719834->leave($__internal_2c6b4a1938d2a8515ee6d5ffaf5019129fb6ecb859de3610cb1e8a2fd7719834_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_c6300b51da4bada8ddf4c7e99ffcafbd63a3a0347c975a408b044ad5faf8cbed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6300b51da4bada8ddf4c7e99ffcafbd63a3a0347c975a408b044ad5faf8cbed->enter($__internal_c6300b51da4bada8ddf4c7e99ffcafbd63a3a0347c975a408b044ad5faf8cbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_ff4152495a4fa913c65c2e89c0952f1994173e5a81a40aa5f103a98ddfff8699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4152495a4fa913c65c2e89c0952f1994173e5a81a40aa5f103a98ddfff8699->enter($__internal_ff4152495a4fa913c65c2e89c0952f1994173e5a81a40aa5f103a98ddfff8699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 8
        echo "\t <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th> Age </th>
                    <th>Date d'entrée</th>
                    <th>Type de contrat</th>
                    <th>telephone</th>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
        echo "</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "enseignants", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["enseignant"]) {
            // line 24
            echo "                    <tr>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["enseignant"], "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "prenom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute($context["enseignant"], "dateDeNaissance", array()), "Y")), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["enseignant"], "dateDEntree", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "typeContrat", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "telephone", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editEnseignant", array("id" => $this->getAttribute($context["enseignant"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-pencil-square-o\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeEnseignant", array("id" => $this->getAttribute($context["enseignant"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEnseignant", array("id" => $this->getAttribute($context["enseignant"], "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"fa fa-user\"></span>
                            </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseignant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </tbody>
        </table>                                    
    </div>
";
        
        $__internal_ff4152495a4fa913c65c2e89c0952f1994173e5a81a40aa5f103a98ddfff8699->leave($__internal_ff4152495a4fa913c65c2e89c0952f1994173e5a81a40aa5f103a98ddfff8699_prof);

        
        $__internal_c6300b51da4bada8ddf4c7e99ffcafbd63a3a0347c975a408b044ad5faf8cbed->leave($__internal_c6300b51da4bada8ddf4c7e99ffcafbd63a3a0347c975a408b044ad5faf8cbed_prof);

    }

    // line 52
    public function block_active($context, array $blocks = array())
    {
        $__internal_2997cadd1f96b9480c2d4bc0deb99a483860f55fa6b6da87fffe3d76a0daab54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2997cadd1f96b9480c2d4bc0deb99a483860f55fa6b6da87fffe3d76a0daab54->enter($__internal_2997cadd1f96b9480c2d4bc0deb99a483860f55fa6b6da87fffe3d76a0daab54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_471105e1c721de2baa5556b760f4a6799f8df09a263c00cc55caec5d4af7fc4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471105e1c721de2baa5556b760f4a6799f8df09a263c00cc55caec5d4af7fc4c->enter($__internal_471105e1c721de2baa5556b760f4a6799f8df09a263c00cc55caec5d4af7fc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 53
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.ens').addClass('active');
        \$('.listEns').addClass('active');
    </script>
";
        
        $__internal_471105e1c721de2baa5556b760f4a6799f8df09a263c00cc55caec5d4af7fc4c->leave($__internal_471105e1c721de2baa5556b760f4a6799f8df09a263c00cc55caec5d4af7fc4c_prof);

        
        $__internal_2997cadd1f96b9480c2d4bc0deb99a483860f55fa6b6da87fffe3d76a0daab54->leave($__internal_2997cadd1f96b9480c2d4bc0deb99a483860f55fa6b6da87fffe3d76a0daab54_prof);

    }

    public function getTemplateName()
    {
        return ":enseignantsViews:listEnseignants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 53,  172 => 52,  159 => 47,  147 => 41,  139 => 36,  131 => 31,  126 => 29,  122 => 28,  118 => 27,  114 => 26,  108 => 25,  105 => 24,  101 => 23,  94 => 19,  90 => 18,  86 => 17,  75 => 8,  66 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    {{'list'|trans}} {{'teachers'|trans}}
{% endblock %}

{% block bodyList %}
\t <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th> Age </th>
                    <th>Date d'entrée</th>
                    <th>Type de contrat</th>
                    <th>telephone</th>
                    <th>{{'edit'|trans}}</th>
                    <th>{{'delete'|trans}}</th>
                    <th>{{'profile'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for enseignant in app.user.ecole.enseignants %}
                    <tr>
                        <td>{{ enseignant.nom|upper}} {{ enseignant.prenom}}</td>
                        <td>{{ (\"now\"|date(\"Y\"))-( enseignant.dateDeNaissance|date(\"Y\"))}}</td>
                        <td>{{enseignant.dateDEntree|date(\"Y-m-d\")}}</td>
                        <td>{{enseignant.typeContrat}}</td>
                        <td>{{enseignant.telephone}}</td>
                        <td>
                            <a href=\"{{ path('editEnseignant',{'id':enseignant.id})}}\">
                                <span class=\"fa fa-pencil-square-o\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"{{ path('removeEnseignant',{'id':enseignant.id})}}\">
                                <span class=\"fa fa-trash\"></span>
                            </a>
                        </td>
                        <td>
                            <a href=\"{{ path('profileEnseignant',{'id':enseignant.id})}}\">
                                <span class=\"fa fa-user\"></span>
                            </a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
{% endblock %}

{% block active %}
    <script>
        \$('.active').removeClass('active');
        \$('.ens').addClass('active');
        \$('.listEns').addClass('active');
    </script>
{% endblock%}

", ":enseignantsViews:listEnseignants.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/enseignantsViews/listEnseignants.html.twig");
    }
}
