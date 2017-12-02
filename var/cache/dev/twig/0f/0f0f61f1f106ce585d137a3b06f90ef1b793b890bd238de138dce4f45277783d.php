<?php

/* adminsViews/schoolAdmin.html.twig */
class __TwigTemplate_a4b96a917cc277b7d8d6346826fc9b0810990e1e819533c79d824cd3e9f02177 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseSuper.html.twig", "adminsViews/schoolAdmin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseSuper.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eceba2d5844556de757c2f3c0e306a7934653220d11e32225279d7294e600e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eceba2d5844556de757c2f3c0e306a7934653220d11e32225279d7294e600e3d->enter($__internal_eceba2d5844556de757c2f3c0e306a7934653220d11e32225279d7294e600e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/schoolAdmin.html.twig"));

        $__internal_de3bd088f889c1fdb458b46c42e45366e194582c1da87b8cb8c667c633eaa24c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3bd088f889c1fdb458b46c42e45366e194582c1da87b8cb8c667c633eaa24c->enter($__internal_de3bd088f889c1fdb458b46c42e45366e194582c1da87b8cb8c667c633eaa24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/schoolAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eceba2d5844556de757c2f3c0e306a7934653220d11e32225279d7294e600e3d->leave($__internal_eceba2d5844556de757c2f3c0e306a7934653220d11e32225279d7294e600e3d_prof);

        
        $__internal_de3bd088f889c1fdb458b46c42e45366e194582c1da87b8cb8c667c633eaa24c->leave($__internal_de3bd088f889c1fdb458b46c42e45366e194582c1da87b8cb8c667c633eaa24c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e6ad035683e8e7e1bf93bfb0d6f944c54406ad7a78d5b1e49c23e9582444c3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6ad035683e8e7e1bf93bfb0d6f944c54406ad7a78d5b1e49c23e9582444c3f->enter($__internal_1e6ad035683e8e7e1bf93bfb0d6f944c54406ad7a78d5b1e49c23e9582444c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27ec6dd1cdc5080493dd8b021589181f50e9d061e09abd58f6091ba5d3ada497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ec6dd1cdc5080493dd8b021589181f50e9d061e09abd58f6091ba5d3ada497->enter($__internal_27ec6dd1cdc5080493dd8b021589181f50e9d061e09abd58f6091ba5d3ada497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
\t<!-- PAGE CONTENT WRAPPER -->
        <div class=\"page-content-wrap\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    
                    <!-- START DATATABLE EXPORT -->
                    <div class=\"panel panel-warning\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\"> Pas d'ecole associé à ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "prenom", array()), "html", null, true);
        echo " </h3>                                 
                            
                        </div>
                        <div class=\"panel-body\">                   
\t\t\t\t\t\t\t <div class=\"table-responsive\">
\t\t\t\t\t\t        <table id=\"customers2\" class=\"table datatable\">
\t\t\t\t\t\t            <thead>
\t\t\t\t\t\t                <tr>
\t\t\t\t\t\t                    <th>Nom </th>
\t\t\t\t\t\t                    <th>Code</th>
\t\t\t\t\t\t                    <th>adresse</th>
\t\t\t\t\t\t                    <th>telephone</th>
\t\t\t\t\t\t                    <th>Associer</th>
\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t            </thead>
\t\t\t\t\t\t            <tbody>
\t\t\t\t\t\t                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ecoles"] ?? $this->getContext($context, "ecoles")));
        foreach ($context['_seq'] as $context["_key"] => $context["ecole"]) {
            // line 29
            echo "\t\t\t\t\t\t                ";
            if (($this->getAttribute($context["ecole"], "admin", array()) == null)) {
                // line 30
                echo "\t\t\t\t\t\t                    <tr>
\t\t\t\t\t\t                        <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t                        <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "code", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t                        <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "adresse", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t                        <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "telephone", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t                        <td>
\t\t\t\t\t\t                            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("assoSchool", array("id" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array()), "idp" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t                                <span class=\"fa fa-plus\"></span>
\t\t\t\t\t\t                            </a>
\t\t\t\t\t\t                        </td>
\t\t\t\t\t\t                    </tr>
\t\t\t\t\t\t                 ";
            }
            // line 42
            echo "\t\t\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ecole'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t\t\t\t            </tbody>
\t\t\t\t\t\t        </table>                                    
\t\t\t\t\t\t    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

";
        
        $__internal_27ec6dd1cdc5080493dd8b021589181f50e9d061e09abd58f6091ba5d3ada497->leave($__internal_27ec6dd1cdc5080493dd8b021589181f50e9d061e09abd58f6091ba5d3ada497_prof);

        
        $__internal_1e6ad035683e8e7e1bf93bfb0d6f944c54406ad7a78d5b1e49c23e9582444c3f->leave($__internal_1e6ad035683e8e7e1bf93bfb0d6f944c54406ad7a78d5b1e49c23e9582444c3f_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e52b7690779a8eb2d2086b1697a76625f24d7f5340f00723ddfb9cb8bda5cbe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e52b7690779a8eb2d2086b1697a76625f24d7f5340f00723ddfb9cb8bda5cbe0->enter($__internal_e52b7690779a8eb2d2086b1697a76625f24d7f5340f00723ddfb9cb8bda5cbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8dcdc5bcfc44607eb79e780198cda41ab781f19c0aa088dbc349f03349ef713e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dcdc5bcfc44607eb79e780198cda41ab781f19c0aa088dbc349f03349ef713e->enter($__internal_8dcdc5bcfc44607eb79e780198cda41ab781f19c0aa088dbc349f03349ef713e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "        
    <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/tableExport.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jquery.base64.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/html2canvas.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jspdf/libs/sprintf.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jspdf/jspdf.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jspdf/libs/base64.js"), "html", null, true);
        echo "\"></script>        
       

";
        
        $__internal_8dcdc5bcfc44607eb79e780198cda41ab781f19c0aa088dbc349f03349ef713e->leave($__internal_8dcdc5bcfc44607eb79e780198cda41ab781f19c0aa088dbc349f03349ef713e_prof);

        
        $__internal_e52b7690779a8eb2d2086b1697a76625f24d7f5340f00723ddfb9cb8bda5cbe0->leave($__internal_e52b7690779a8eb2d2086b1697a76625f24d7f5340f00723ddfb9cb8bda5cbe0_prof);

    }

    public function getTemplateName()
    {
        return "adminsViews/schoolAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 62,  175 => 61,  171 => 60,  167 => 59,  163 => 58,  159 => 57,  155 => 56,  152 => 55,  143 => 54,  124 => 43,  118 => 42,  109 => 36,  104 => 34,  100 => 33,  96 => 32,  92 => 31,  89 => 30,  86 => 29,  82 => 28,  61 => 12,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseSuper.html.twig' %}
{% block body %}

\t<!-- PAGE CONTENT WRAPPER -->
        <div class=\"page-content-wrap\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    
                    <!-- START DATATABLE EXPORT -->
                    <div class=\"panel panel-warning\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\"> Pas d'ecole associé à {{admin.nom}} {{admin.prenom}} </h3>                                 
                            
                        </div>
                        <div class=\"panel-body\">                   
\t\t\t\t\t\t\t <div class=\"table-responsive\">
\t\t\t\t\t\t        <table id=\"customers2\" class=\"table datatable\">
\t\t\t\t\t\t            <thead>
\t\t\t\t\t\t                <tr>
\t\t\t\t\t\t                    <th>Nom </th>
\t\t\t\t\t\t                    <th>Code</th>
\t\t\t\t\t\t                    <th>adresse</th>
\t\t\t\t\t\t                    <th>telephone</th>
\t\t\t\t\t\t                    <th>Associer</th>
\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t            </thead>
\t\t\t\t\t\t            <tbody>
\t\t\t\t\t\t                {% for ecole in ecoles %}
\t\t\t\t\t\t                {% if ecole.admin == null %}
\t\t\t\t\t\t                    <tr>
\t\t\t\t\t\t                        <td>{{ ecole.nom}}</td>
\t\t\t\t\t\t                        <td>{{ ecole.code}}</td>
\t\t\t\t\t\t                        <td>{{ ecole.adresse}}</td>
\t\t\t\t\t\t                        <td>{{ ecole.telephone}}</td>
\t\t\t\t\t\t                        <td>
\t\t\t\t\t\t                            <a href=\"{{ path('assoSchool',{'id':admin.id,'idp':ecole.id})}}\">
\t\t\t\t\t\t                                <span class=\"fa fa-plus\"></span>
\t\t\t\t\t\t                            </a>
\t\t\t\t\t\t                        </td>
\t\t\t\t\t\t                    </tr>
\t\t\t\t\t\t                 {% endif %}
\t\t\t\t\t\t                {% endfor %}
\t\t\t\t\t\t            </tbody>
\t\t\t\t\t\t        </table>                                    
\t\t\t\t\t\t    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{% endblock %}

{% block javascripts %}
        
    <script type=\"text/javascript\" src=\"{{ asset('js/plugins/datatables/jquery.dataTables.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/tableExport.js')}}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/jquery.base64.js')}}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/html2canvas.js')}}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/jspdf/libs/sprintf.js')}}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/jspdf/jspdf.js')}}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/jspdf/libs/base64.js')}}\"></script>        
       

{% endblock %}  ", "adminsViews/schoolAdmin.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/adminsViews/schoolAdmin.html.twig");
    }
}
