<?php

/* :elevesViews:parentEleve.html.twig */
class __TwigTemplate_8a08047e82146b81e8aceb7f3b2001d61f9ab5e574af9b38875299215b6d8fa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base2.html.twig", ":elevesViews:parentEleve.html.twig", 2);
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
        $__internal_d3dba7d592c2e315c021d945bf779b5b251bc95852aa53b0bfd717ed44389680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3dba7d592c2e315c021d945bf779b5b251bc95852aa53b0bfd717ed44389680->enter($__internal_d3dba7d592c2e315c021d945bf779b5b251bc95852aa53b0bfd717ed44389680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:parentEleve.html.twig"));

        $__internal_5db7d41c4ac1849aa3ab24784248ffeb9da6473ab19b0a0ee73f5ac6a0a30c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db7d41c4ac1849aa3ab24784248ffeb9da6473ab19b0a0ee73f5ac6a0a30c35->enter($__internal_5db7d41c4ac1849aa3ab24784248ffeb9da6473ab19b0a0ee73f5ac6a0a30c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:parentEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3dba7d592c2e315c021d945bf779b5b251bc95852aa53b0bfd717ed44389680->leave($__internal_d3dba7d592c2e315c021d945bf779b5b251bc95852aa53b0bfd717ed44389680_prof);

        
        $__internal_5db7d41c4ac1849aa3ab24784248ffeb9da6473ab19b0a0ee73f5ac6a0a30c35->leave($__internal_5db7d41c4ac1849aa3ab24784248ffeb9da6473ab19b0a0ee73f5ac6a0a30c35_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_afe9a750e5620a106129228543c55cf76e89a318c2893807a042d5fd9b3d6c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe9a750e5620a106129228543c55cf76e89a318c2893807a042d5fd9b3d6c1d->enter($__internal_afe9a750e5620a106129228543c55cf76e89a318c2893807a042d5fd9b3d6c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f3850209a1982a84f9c134913449957e376bd03e7e80ec0a11587f515777c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3850209a1982a84f9c134913449957e376bd03e7e80ec0a11587f515777c71->enter($__internal_9f3850209a1982a84f9c134913449957e376bd03e7e80ec0a11587f515777c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9f3850209a1982a84f9c134913449957e376bd03e7e80ec0a11587f515777c71->leave($__internal_9f3850209a1982a84f9c134913449957e376bd03e7e80ec0a11587f515777c71_prof);

        
        $__internal_afe9a750e5620a106129228543c55cf76e89a318c2893807a042d5fd9b3d6c1d->leave($__internal_afe9a750e5620a106129228543c55cf76e89a318c2893807a042d5fd9b3d6c1d_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52b0a2d39776045cef595a7533b2662f8a68da20fa9251616f99834f54c10261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b0a2d39776045cef595a7533b2662f8a68da20fa9251616f99834f54c10261->enter($__internal_52b0a2d39776045cef595a7533b2662f8a68da20fa9251616f99834f54c10261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_03595fbabd0c1701bec9f68c3933692b560c28618ab01b5951828caa1c8d5a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03595fbabd0c1701bec9f68c3933692b560c28618ab01b5951828caa1c8d5a1f->enter($__internal_03595fbabd0c1701bec9f68c3933692b560c28618ab01b5951828caa1c8d5a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_03595fbabd0c1701bec9f68c3933692b560c28618ab01b5951828caa1c8d5a1f->leave($__internal_03595fbabd0c1701bec9f68c3933692b560c28618ab01b5951828caa1c8d5a1f_prof);

        
        $__internal_52b0a2d39776045cef595a7533b2662f8a68da20fa9251616f99834f54c10261->leave($__internal_52b0a2d39776045cef595a7533b2662f8a68da20fa9251616f99834f54c10261_prof);

    }

    public function getTemplateName()
    {
        return ":elevesViews:parentEleve.html.twig";
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


", ":elevesViews:parentEleve.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/elevesViews/parentEleve.html.twig");
    }
}
