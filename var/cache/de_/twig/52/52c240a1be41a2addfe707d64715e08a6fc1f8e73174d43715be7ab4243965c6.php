<?php

/* :adminsViews:schoolAdmin.html.twig */
class __TwigTemplate_729f3fe2d73560a5a80c95e08abce22dbfe1dbd1233ba291e370b68789670b2d extends Twig_Template
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
        $__internal_d0022d70a916d8599be421779521581971679ed417df45b4dec3aff5ab25f502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0022d70a916d8599be421779521581971679ed417df45b4dec3aff5ab25f502->enter($__internal_d0022d70a916d8599be421779521581971679ed417df45b4dec3aff5ab25f502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:schoolAdmin.html.twig"));

        $__internal_6a3b2a305879c72f818a6949986f36de50986c86523431ae94b537e38dbdd4f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3b2a305879c72f818a6949986f36de50986c86523431ae94b537e38dbdd4f3->enter($__internal_6a3b2a305879c72f818a6949986f36de50986c86523431ae94b537e38dbdd4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:schoolAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0022d70a916d8599be421779521581971679ed417df45b4dec3aff5ab25f502->leave($__internal_d0022d70a916d8599be421779521581971679ed417df45b4dec3aff5ab25f502_prof);

        
        $__internal_6a3b2a305879c72f818a6949986f36de50986c86523431ae94b537e38dbdd4f3->leave($__internal_6a3b2a305879c72f818a6949986f36de50986c86523431ae94b537e38dbdd4f3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_86e9a858615b698c7d91f73e86d87bc2d46bbb602209b14cb825e6fb94bcf636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e9a858615b698c7d91f73e86d87bc2d46bbb602209b14cb825e6fb94bcf636->enter($__internal_86e9a858615b698c7d91f73e86d87bc2d46bbb602209b14cb825e6fb94bcf636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b64b97e9db719f70181230bbcfb5a20f94635ed7314302233a83dd7c0d539e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b64b97e9db719f70181230bbcfb5a20f94635ed7314302233a83dd7c0d539e4->enter($__internal_4b64b97e9db719f70181230bbcfb5a20f94635ed7314302233a83dd7c0d539e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4b64b97e9db719f70181230bbcfb5a20f94635ed7314302233a83dd7c0d539e4->leave($__internal_4b64b97e9db719f70181230bbcfb5a20f94635ed7314302233a83dd7c0d539e4_prof);

        
        $__internal_86e9a858615b698c7d91f73e86d87bc2d46bbb602209b14cb825e6fb94bcf636->leave($__internal_86e9a858615b698c7d91f73e86d87bc2d46bbb602209b14cb825e6fb94bcf636_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c1d87d6e65637708dba6a05f1a29bb40a5b4d06886346e8bc75286894f1e984f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d87d6e65637708dba6a05f1a29bb40a5b4d06886346e8bc75286894f1e984f->enter($__internal_c1d87d6e65637708dba6a05f1a29bb40a5b4d06886346e8bc75286894f1e984f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1ee3e3460d6b7d95bac60e77ecda86c9965a006ef30d6dbad1968950b23ccb23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee3e3460d6b7d95bac60e77ecda86c9965a006ef30d6dbad1968950b23ccb23->enter($__internal_1ee3e3460d6b7d95bac60e77ecda86c9965a006ef30d6dbad1968950b23ccb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_1ee3e3460d6b7d95bac60e77ecda86c9965a006ef30d6dbad1968950b23ccb23->leave($__internal_1ee3e3460d6b7d95bac60e77ecda86c9965a006ef30d6dbad1968950b23ccb23_prof);

        
        $__internal_c1d87d6e65637708dba6a05f1a29bb40a5b4d06886346e8bc75286894f1e984f->leave($__internal_c1d87d6e65637708dba6a05f1a29bb40a5b4d06886346e8bc75286894f1e984f_prof);

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
", ":adminsViews:schoolAdmin.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/adminsViews/schoolAdmin.html.twig");
    }
}
