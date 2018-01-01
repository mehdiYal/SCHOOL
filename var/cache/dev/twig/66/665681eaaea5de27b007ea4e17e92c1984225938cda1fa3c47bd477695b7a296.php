<?php

/* :adminsViews:schoolAdmin.html.twig */
class __TwigTemplate_ebb73d08c425d53232e04c35d4d8caa801f1cf2e73fa2c0ab6bc14c4863664c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseSuper.html.twig", ":adminsViews:schoolAdmin.html.twig", 1);
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
        $__internal_57cbebff39303765f95be134401ebb3985be9c83d7f28a9d2f8954dc60434866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57cbebff39303765f95be134401ebb3985be9c83d7f28a9d2f8954dc60434866->enter($__internal_57cbebff39303765f95be134401ebb3985be9c83d7f28a9d2f8954dc60434866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:schoolAdmin.html.twig"));

        $__internal_aba29f249eab2ed5e17551a01dce62a131d2293ce57692ba753ab08b32d78b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba29f249eab2ed5e17551a01dce62a131d2293ce57692ba753ab08b32d78b60->enter($__internal_aba29f249eab2ed5e17551a01dce62a131d2293ce57692ba753ab08b32d78b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:schoolAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57cbebff39303765f95be134401ebb3985be9c83d7f28a9d2f8954dc60434866->leave($__internal_57cbebff39303765f95be134401ebb3985be9c83d7f28a9d2f8954dc60434866_prof);

        
        $__internal_aba29f249eab2ed5e17551a01dce62a131d2293ce57692ba753ab08b32d78b60->leave($__internal_aba29f249eab2ed5e17551a01dce62a131d2293ce57692ba753ab08b32d78b60_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_117288308e8d6b143ddb616921144e2895ad047b196ab1a88c548f4ad47cc8db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_117288308e8d6b143ddb616921144e2895ad047b196ab1a88c548f4ad47cc8db->enter($__internal_117288308e8d6b143ddb616921144e2895ad047b196ab1a88c548f4ad47cc8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66a1a4e6e576c8eb0adeb224e8f74afe73749d2649d4cd925d977c35b48a6376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a1a4e6e576c8eb0adeb224e8f74afe73749d2649d4cd925d977c35b48a6376->enter($__internal_66a1a4e6e576c8eb0adeb224e8f74afe73749d2649d4cd925d977c35b48a6376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "prenom", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["ecoles"]) ? $context["ecoles"] : $this->getContext($context, "ecoles")));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("assoSchool", array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array()), "idp" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
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
        
        $__internal_66a1a4e6e576c8eb0adeb224e8f74afe73749d2649d4cd925d977c35b48a6376->leave($__internal_66a1a4e6e576c8eb0adeb224e8f74afe73749d2649d4cd925d977c35b48a6376_prof);

        
        $__internal_117288308e8d6b143ddb616921144e2895ad047b196ab1a88c548f4ad47cc8db->leave($__internal_117288308e8d6b143ddb616921144e2895ad047b196ab1a88c548f4ad47cc8db_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ed09e691bff2c23b1e8941e535a6a584cb337c35d6106c33034e100540563fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed09e691bff2c23b1e8941e535a6a584cb337c35d6106c33034e100540563fd0->enter($__internal_ed09e691bff2c23b1e8941e535a6a584cb337c35d6106c33034e100540563fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f5bcf52185c1e1c655a8aa37d7a8d2610b2ab22f9d39415f1443e6f60ef98aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5bcf52185c1e1c655a8aa37d7a8d2610b2ab22f9d39415f1443e6f60ef98aff->enter($__internal_f5bcf52185c1e1c655a8aa37d7a8d2610b2ab22f9d39415f1443e6f60ef98aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f5bcf52185c1e1c655a8aa37d7a8d2610b2ab22f9d39415f1443e6f60ef98aff->leave($__internal_f5bcf52185c1e1c655a8aa37d7a8d2610b2ab22f9d39415f1443e6f60ef98aff_prof);

        
        $__internal_ed09e691bff2c23b1e8941e535a6a584cb337c35d6106c33034e100540563fd0->leave($__internal_ed09e691bff2c23b1e8941e535a6a584cb337c35d6106c33034e100540563fd0_prof);

    }

    public function getTemplateName()
    {
        return ":adminsViews:schoolAdmin.html.twig";
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
       

{% endblock %}  
", ":adminsViews:schoolAdmin.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/adminsViews/schoolAdmin.html.twig");
    }
}
