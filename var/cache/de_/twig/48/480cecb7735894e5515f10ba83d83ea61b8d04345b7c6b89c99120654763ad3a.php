<?php

/* adminsViews/schoolAdmin.html.twig */
class __TwigTemplate_c1c7bd0ca2a794a876a04dcf479b94843387b1c59d24b370141def414a79c282 extends Twig_Template
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
        $__internal_2324133cc26f8d7646ec53dd7713ab0c5c1dfda8e3ae79930bdd70ad165172ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2324133cc26f8d7646ec53dd7713ab0c5c1dfda8e3ae79930bdd70ad165172ba->enter($__internal_2324133cc26f8d7646ec53dd7713ab0c5c1dfda8e3ae79930bdd70ad165172ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/schoolAdmin.html.twig"));

        $__internal_b5840caef3abdaee86195d213b89511d8e07c2cfa54a683391173b3bf981eff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5840caef3abdaee86195d213b89511d8e07c2cfa54a683391173b3bf981eff1->enter($__internal_b5840caef3abdaee86195d213b89511d8e07c2cfa54a683391173b3bf981eff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/schoolAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2324133cc26f8d7646ec53dd7713ab0c5c1dfda8e3ae79930bdd70ad165172ba->leave($__internal_2324133cc26f8d7646ec53dd7713ab0c5c1dfda8e3ae79930bdd70ad165172ba_prof);

        
        $__internal_b5840caef3abdaee86195d213b89511d8e07c2cfa54a683391173b3bf981eff1->leave($__internal_b5840caef3abdaee86195d213b89511d8e07c2cfa54a683391173b3bf981eff1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6356567a0804bea0e7b624d121e7e5236db54950bc0b39e5bbbea98a03eaf161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6356567a0804bea0e7b624d121e7e5236db54950bc0b39e5bbbea98a03eaf161->enter($__internal_6356567a0804bea0e7b624d121e7e5236db54950bc0b39e5bbbea98a03eaf161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_571dfb68d5bd6f6646e86e6e46a164b15bd9273fadfbc3763f626f52e6d8f37b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571dfb68d5bd6f6646e86e6e46a164b15bd9273fadfbc3763f626f52e6d8f37b->enter($__internal_571dfb68d5bd6f6646e86e6e46a164b15bd9273fadfbc3763f626f52e6d8f37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_571dfb68d5bd6f6646e86e6e46a164b15bd9273fadfbc3763f626f52e6d8f37b->leave($__internal_571dfb68d5bd6f6646e86e6e46a164b15bd9273fadfbc3763f626f52e6d8f37b_prof);

        
        $__internal_6356567a0804bea0e7b624d121e7e5236db54950bc0b39e5bbbea98a03eaf161->leave($__internal_6356567a0804bea0e7b624d121e7e5236db54950bc0b39e5bbbea98a03eaf161_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6e450d3213333a67dadb080c496334c27c1c6485427e54c627b0fe68b4d4ad23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e450d3213333a67dadb080c496334c27c1c6485427e54c627b0fe68b4d4ad23->enter($__internal_6e450d3213333a67dadb080c496334c27c1c6485427e54c627b0fe68b4d4ad23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8aa2a8807dfc8e2e7c0963b92eb5039a9bdd4dfdddca95d1371205153edd7a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa2a8807dfc8e2e7c0963b92eb5039a9bdd4dfdddca95d1371205153edd7a58->enter($__internal_8aa2a8807dfc8e2e7c0963b92eb5039a9bdd4dfdddca95d1371205153edd7a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_8aa2a8807dfc8e2e7c0963b92eb5039a9bdd4dfdddca95d1371205153edd7a58->leave($__internal_8aa2a8807dfc8e2e7c0963b92eb5039a9bdd4dfdddca95d1371205153edd7a58_prof);

        
        $__internal_6e450d3213333a67dadb080c496334c27c1c6485427e54c627b0fe68b4d4ad23->leave($__internal_6e450d3213333a67dadb080c496334c27c1c6485427e54c627b0fe68b4d4ad23_prof);

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
       

{% endblock %}  
", "adminsViews/schoolAdmin.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\adminsViews\\schoolAdmin.html.twig");
    }
}
