<?php

/* elevesViews/parentEleve.html.twig */
class __TwigTemplate_b4c3adf8c7825d63969d25d4068086eccdc1adb950604d9e7a4edd10b8acb4ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "elevesViews/parentEleve.html.twig", 1);
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
        $__internal_6cdd7031350696612ff33ef6059d0820044d2bfa3cb660730a32c9f958ec5da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cdd7031350696612ff33ef6059d0820044d2bfa3cb660730a32c9f958ec5da7->enter($__internal_6cdd7031350696612ff33ef6059d0820044d2bfa3cb660730a32c9f958ec5da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/parentEleve.html.twig"));

        $__internal_0e01e5d6df887eaaf8b0b1b9a9954f9d556c924add0d5477ccd1a4efcd95e4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e01e5d6df887eaaf8b0b1b9a9954f9d556c924add0d5477ccd1a4efcd95e4d3->enter($__internal_0e01e5d6df887eaaf8b0b1b9a9954f9d556c924add0d5477ccd1a4efcd95e4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/parentEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cdd7031350696612ff33ef6059d0820044d2bfa3cb660730a32c9f958ec5da7->leave($__internal_6cdd7031350696612ff33ef6059d0820044d2bfa3cb660730a32c9f958ec5da7_prof);

        
        $__internal_0e01e5d6df887eaaf8b0b1b9a9954f9d556c924add0d5477ccd1a4efcd95e4d3->leave($__internal_0e01e5d6df887eaaf8b0b1b9a9954f9d556c924add0d5477ccd1a4efcd95e4d3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_da87c7f43b1c56bfbc5bed3ba86db71a095f9df164553d48b83a22e0ca57db92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da87c7f43b1c56bfbc5bed3ba86db71a095f9df164553d48b83a22e0ca57db92->enter($__internal_da87c7f43b1c56bfbc5bed3ba86db71a095f9df164553d48b83a22e0ca57db92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32f637316c5592d5dc1434852058b21ce3f6415feddc26a53995a10a219c91c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f637316c5592d5dc1434852058b21ce3f6415feddc26a53995a10a219c91c3->enter($__internal_32f637316c5592d5dc1434852058b21ce3f6415feddc26a53995a10a219c91c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <!-- PAGE CONTENT WRAPPER -->
        <div class=\"page-content-wrap\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    
                    <!-- START DATATABLE EXPORT -->
                    <div class=\"panel panel-warning\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\"> Pas de parent associé à ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eleve"] ?? $this->getContext($context, "eleve")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eleve"] ?? $this->getContext($context, "eleve")), "prenom", array()), "html", null, true);
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
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ecole", array()), "parents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["parant"]) {
            // line 28
            echo "                                            <tr>
                                                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["parant"], "nom", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["parant"], "prenom", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["parant"], "telephone", array()), "html", null, true);
            echo "</td>
                                                <td>
                                                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("assoParent", array("id" => $this->getAttribute(($context["eleve"] ?? $this->getContext($context, "eleve")), "id", array()), "idp" => $this->getAttribute($context["parant"], "id", array()))), "html", null, true);
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
        // line 39
        echo "                                    </tbody>
                                </table>                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

";
        
        $__internal_32f637316c5592d5dc1434852058b21ce3f6415feddc26a53995a10a219c91c3->leave($__internal_32f637316c5592d5dc1434852058b21ce3f6415feddc26a53995a10a219c91c3_prof);

        
        $__internal_da87c7f43b1c56bfbc5bed3ba86db71a095f9df164553d48b83a22e0ca57db92->leave($__internal_da87c7f43b1c56bfbc5bed3ba86db71a095f9df164553d48b83a22e0ca57db92_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_315f982f059c0d024ec8e01398563920bb5bac0953eb2a68f0d96bd04c9b58a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_315f982f059c0d024ec8e01398563920bb5bac0953eb2a68f0d96bd04c9b58a8->enter($__internal_315f982f059c0d024ec8e01398563920bb5bac0953eb2a68f0d96bd04c9b58a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ca3034b45e0f541fdfa2e869065e003bec14f27b4f695dd52225ed921a01117a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3034b45e0f541fdfa2e869065e003bec14f27b4f695dd52225ed921a01117a->enter($__internal_ca3034b45e0f541fdfa2e869065e003bec14f27b4f695dd52225ed921a01117a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "        
    <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/tableExport.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jquery.base64.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/html2canvas.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jspdf/libs/sprintf.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jspdf/jspdf.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jspdf/libs/base64.js"), "html", null, true);
        echo "\"></script>        
       

";
        
        $__internal_ca3034b45e0f541fdfa2e869065e003bec14f27b4f695dd52225ed921a01117a->leave($__internal_ca3034b45e0f541fdfa2e869065e003bec14f27b4f695dd52225ed921a01117a_prof);

        
        $__internal_315f982f059c0d024ec8e01398563920bb5bac0953eb2a68f0d96bd04c9b58a8->leave($__internal_315f982f059c0d024ec8e01398563920bb5bac0953eb2a68f0d96bd04c9b58a8_prof);

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
        return array (  168 => 58,  164 => 57,  160 => 56,  156 => 55,  152 => 54,  148 => 53,  144 => 52,  141 => 51,  132 => 50,  113 => 39,  101 => 33,  96 => 31,  92 => 30,  88 => 29,  85 => 28,  81 => 27,  61 => 12,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}
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

", "elevesViews/parentEleve.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/elevesViews/parentEleve.html.twig");
    }
}
