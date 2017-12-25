<?php

/* enseignantsViews/listEnseignants.html.twig */
class __TwigTemplate_cb06fb9f79182773523b721e327d0218886f5531e26b51e98d6f7f42cb6c152e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", "enseignantsViews/listEnseignants.html.twig", 1);
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
        $__internal_2904dcd841b56bd363f2f5a23f8e593c8285223ad60580a0c926d4fa436d61b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2904dcd841b56bd363f2f5a23f8e593c8285223ad60580a0c926d4fa436d61b1->enter($__internal_2904dcd841b56bd363f2f5a23f8e593c8285223ad60580a0c926d4fa436d61b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listEnseignants.html.twig"));

        $__internal_aa70e17e1de33f2496bef7b9368439d30fd1a04a8274a6b06f023afdb5ef6d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa70e17e1de33f2496bef7b9368439d30fd1a04a8274a6b06f023afdb5ef6d38->enter($__internal_aa70e17e1de33f2496bef7b9368439d30fd1a04a8274a6b06f023afdb5ef6d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listEnseignants.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2904dcd841b56bd363f2f5a23f8e593c8285223ad60580a0c926d4fa436d61b1->leave($__internal_2904dcd841b56bd363f2f5a23f8e593c8285223ad60580a0c926d4fa436d61b1_prof);

        
        $__internal_aa70e17e1de33f2496bef7b9368439d30fd1a04a8274a6b06f023afdb5ef6d38->leave($__internal_aa70e17e1de33f2496bef7b9368439d30fd1a04a8274a6b06f023afdb5ef6d38_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb53eee7f0d253c718080f37a86a28994c9e4e8bd9abbac4e1bb64e5f2a90970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb53eee7f0d253c718080f37a86a28994c9e4e8bd9abbac4e1bb64e5f2a90970->enter($__internal_cb53eee7f0d253c718080f37a86a28994c9e4e8bd9abbac4e1bb64e5f2a90970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_46b8adc8652bcd51360c1c830e6bf95ad94d6f0cd094f46ab9a382fe0241f590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b8adc8652bcd51360c1c830e6bf95ad94d6f0cd094f46ab9a382fe0241f590->enter($__internal_46b8adc8652bcd51360c1c830e6bf95ad94d6f0cd094f46ab9a382fe0241f590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "
";
        
        $__internal_46b8adc8652bcd51360c1c830e6bf95ad94d6f0cd094f46ab9a382fe0241f590->leave($__internal_46b8adc8652bcd51360c1c830e6bf95ad94d6f0cd094f46ab9a382fe0241f590_prof);

        
        $__internal_cb53eee7f0d253c718080f37a86a28994c9e4e8bd9abbac4e1bb64e5f2a90970->leave($__internal_cb53eee7f0d253c718080f37a86a28994c9e4e8bd9abbac4e1bb64e5f2a90970_prof);

    }

    // line 7
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_710defa356af9d3a14e65712d24861a0a4997b576ffa06a6a1bb311dd924c8bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_710defa356af9d3a14e65712d24861a0a4997b576ffa06a6a1bb311dd924c8bf->enter($__internal_710defa356af9d3a14e65712d24861a0a4997b576ffa06a6a1bb311dd924c8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_33692c2386a11331ec8a25d1a2af89ba74e1aba908fac59be5f1f2d7b0488421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33692c2386a11331ec8a25d1a2af89ba74e1aba908fac59be5f1f2d7b0488421->enter($__internal_33692c2386a11331ec8a25d1a2af89ba74e1aba908fac59be5f1f2d7b0488421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ecole", array()), "enseignants", array()));
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
        
        $__internal_33692c2386a11331ec8a25d1a2af89ba74e1aba908fac59be5f1f2d7b0488421->leave($__internal_33692c2386a11331ec8a25d1a2af89ba74e1aba908fac59be5f1f2d7b0488421_prof);

        
        $__internal_710defa356af9d3a14e65712d24861a0a4997b576ffa06a6a1bb311dd924c8bf->leave($__internal_710defa356af9d3a14e65712d24861a0a4997b576ffa06a6a1bb311dd924c8bf_prof);

    }

    // line 52
    public function block_active($context, array $blocks = array())
    {
        $__internal_65918519e3488e955e99ae54e98da7d66635f47bb2cf98b9a214625dd11f4de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65918519e3488e955e99ae54e98da7d66635f47bb2cf98b9a214625dd11f4de7->enter($__internal_65918519e3488e955e99ae54e98da7d66635f47bb2cf98b9a214625dd11f4de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_2ea17153abc16ea57bade944631353d66104df8127366bc6a07beee1bb1e90f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea17153abc16ea57bade944631353d66104df8127366bc6a07beee1bb1e90f7->enter($__internal_2ea17153abc16ea57bade944631353d66104df8127366bc6a07beee1bb1e90f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 53
        echo "    <script>
        \$('.active').removeClass('active');
        \$('.ens').addClass('active');
        \$('.listEns').addClass('active');
    </script>
";
        
        $__internal_2ea17153abc16ea57bade944631353d66104df8127366bc6a07beee1bb1e90f7->leave($__internal_2ea17153abc16ea57bade944631353d66104df8127366bc6a07beee1bb1e90f7_prof);

        
        $__internal_65918519e3488e955e99ae54e98da7d66635f47bb2cf98b9a214625dd11f4de7->leave($__internal_65918519e3488e955e99ae54e98da7d66635f47bb2cf98b9a214625dd11f4de7_prof);

    }

    public function getTemplateName()
    {
        return "enseignantsViews/listEnseignants.html.twig";
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

", "enseignantsViews/listEnseignants.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/enseignantsViews/listEnseignants.html.twig");
    }
}
