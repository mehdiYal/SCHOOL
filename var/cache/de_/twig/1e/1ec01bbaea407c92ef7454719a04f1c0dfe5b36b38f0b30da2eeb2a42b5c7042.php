<?php

/* elevesViews/parentEleve.html.twig */
class __TwigTemplate_5a08bb3fd0b29974035fb019e0ec3953a1337adaafe27d206731d1f8b878f8c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base2.html.twig", "elevesViews/parentEleve.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfceb83512fb5d9be0275c88861d70e83dc98392479110e53bcda9596b1fe263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfceb83512fb5d9be0275c88861d70e83dc98392479110e53bcda9596b1fe263->enter($__internal_dfceb83512fb5d9be0275c88861d70e83dc98392479110e53bcda9596b1fe263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/parentEleve.html.twig"));

        $__internal_173603dc45c7a44772a8fa5ee336e05a1141ee99f5ab0547d409f00fb4ba89d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173603dc45c7a44772a8fa5ee336e05a1141ee99f5ab0547d409f00fb4ba89d0->enter($__internal_173603dc45c7a44772a8fa5ee336e05a1141ee99f5ab0547d409f00fb4ba89d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/parentEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfceb83512fb5d9be0275c88861d70e83dc98392479110e53bcda9596b1fe263->leave($__internal_dfceb83512fb5d9be0275c88861d70e83dc98392479110e53bcda9596b1fe263_prof);

        
        $__internal_173603dc45c7a44772a8fa5ee336e05a1141ee99f5ab0547d409f00fb4ba89d0->leave($__internal_173603dc45c7a44772a8fa5ee336e05a1141ee99f5ab0547d409f00fb4ba89d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a47e562d0608de88aac27957b1fe8c28629ecd1c9bb871bad72c92eabe62f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a47e562d0608de88aac27957b1fe8c28629ecd1c9bb871bad72c92eabe62f1f->enter($__internal_5a47e562d0608de88aac27957b1fe8c28629ecd1c9bb871bad72c92eabe62f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15e13ffc3ff6a48308994853b2ec8ed302de709058376ae23241ff3ecf3eaeb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e13ffc3ff6a48308994853b2ec8ed302de709058376ae23241ff3ecf3eaeb4->enter($__internal_15e13ffc3ff6a48308994853b2ec8ed302de709058376ae23241ff3ecf3eaeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- PAGE CONTENT WRAPPER -->
        <div class=\"page-content-wrap\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    
                    <!-- START DATATABLE EXPORT -->
                    <div class=\"panel panel-warning\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\"> Pas de parent associé à ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "prenom", array()), "html", null, true);
        echo " </h3>                                 
                            
                        </div>
                        <div class=\"panel-body\">                   
                             <div class=\"table-responsive\">
                                <table id=\"customers2\" class=\"table datatable\">
                                    <thead>
                                        <tr>
                                            <th>Nom </th>
                                            <th>Prenom</th>
                                            <th>telephone</th>
                                            <th>Associer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "parents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["parant"]) {
            // line 29
            echo "                                            <tr>
                                                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["parant"], "nom", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["parant"], "prenom", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["parant"], "telephone", array()), "html", null, true);
            echo "</td>
                                                <td>
                                                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("assoParent", array("id" => $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "id", array()), "idp" => $this->getAttribute($context["parant"], "id", array()))), "html", null, true);
            echo "\">
                                                        <span class=\"fa fa-plus\"></span>
                                                    </a>
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                                    </tbody>
                                </table>                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

";
        
        $__internal_15e13ffc3ff6a48308994853b2ec8ed302de709058376ae23241ff3ecf3eaeb4->leave($__internal_15e13ffc3ff6a48308994853b2ec8ed302de709058376ae23241ff3ecf3eaeb4_prof);

        
        $__internal_5a47e562d0608de88aac27957b1fe8c28629ecd1c9bb871bad72c92eabe62f1f->leave($__internal_5a47e562d0608de88aac27957b1fe8c28629ecd1c9bb871bad72c92eabe62f1f_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8ba03264a49bff62019c385b5d10545552a204fc4e22880860c8d1cb7c585a8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba03264a49bff62019c385b5d10545552a204fc4e22880860c8d1cb7c585a8f->enter($__internal_8ba03264a49bff62019c385b5d10545552a204fc4e22880860c8d1cb7c585a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9933f06d763facd16f4157573b5fcb1d0c14f854450ec1aabb07787fd371c367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9933f06d763facd16f4157573b5fcb1d0c14f854450ec1aabb07787fd371c367->enter($__internal_9933f06d763facd16f4157573b5fcb1d0c14f854450ec1aabb07787fd371c367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "        
    <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/tableExport.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jquery.base64.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/html2canvas.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jspdf/libs/sprintf.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jspdf/jspdf.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jspdf/libs/base64.js"), "html", null, true);
        echo "\"></script>        
       

";
        
        $__internal_9933f06d763facd16f4157573b5fcb1d0c14f854450ec1aabb07787fd371c367->leave($__internal_9933f06d763facd16f4157573b5fcb1d0c14f854450ec1aabb07787fd371c367_prof);

        
        $__internal_8ba03264a49bff62019c385b5d10545552a204fc4e22880860c8d1cb7c585a8f->leave($__internal_8ba03264a49bff62019c385b5d10545552a204fc4e22880860c8d1cb7c585a8f_prof);

    }

    public function getTemplateName()
    {
        return "elevesViews/parentEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 59,  164 => 58,  160 => 57,  156 => 56,  152 => 55,  148 => 54,  144 => 53,  141 => 52,  132 => 51,  113 => 40,  101 => 34,  96 => 32,  92 => 31,  88 => 30,  85 => 29,  81 => 28,  61 => 13,  50 => 4,  41 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base2.html.twig' %}
{% block body %}

    <!-- PAGE CONTENT WRAPPER -->
        <div class=\"page-content-wrap\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    
                    <!-- START DATATABLE EXPORT -->
                    <div class=\"panel panel-warning\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\"> Pas de parent associé à {{eleve.nom}} {{eleve.prenom}} </h3>                                 
                            
                        </div>
                        <div class=\"panel-body\">                   
                             <div class=\"table-responsive\">
                                <table id=\"customers2\" class=\"table datatable\">
                                    <thead>
                                        <tr>
                                            <th>Nom </th>
                                            <th>Prenom</th>
                                            <th>telephone</th>
                                            <th>Associer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for parant in app.user.ecole.parents %}
                                            <tr>
                                                <td>{{ parant.nom}}</td>
                                                <td>{{ parant.prenom}}</td>
                                                <td>{{ parant.telephone}}</td>
                                                <td>
                                                    <a href=\"{{ path('assoParent',{'id':eleve.id,'idp':parant.id})}}\">
                                                        <span class=\"fa fa-plus\"></span>
                                                    </a>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{% endblock %}

{% block javascripts %}
        
    <script type=\"text/javascript\" src=\"{{ asset('js/plugins/datatables/jquery.dataTables.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/tableExport.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/jquery.base64.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/html2canvas.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/jspdf/libs/sprintf.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/jspdf/jspdf.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/jspdf/libs/base64.js')}}\"></script>        
       

{% endblock %}  


", "elevesViews/parentEleve.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\elevesViews\\parentEleve.html.twig");
    }
}
