<?php

/* :elevesViews:parentEleve.html.twig */
class __TwigTemplate_93a24c748ba6013ab8490f68a5afc48ce2a2ef4746726fab28cf1b48628bae2a extends Twig_Template
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
        $__internal_868aec32d473bff70d7dc53cc05b6106ac91fc270dafd1825f47c45d02ad761c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_868aec32d473bff70d7dc53cc05b6106ac91fc270dafd1825f47c45d02ad761c->enter($__internal_868aec32d473bff70d7dc53cc05b6106ac91fc270dafd1825f47c45d02ad761c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:parentEleve.html.twig"));

        $__internal_fde96b17b228b9cebbde792129c6e261248804d6d6e541f09ad4fe4b8dcf0821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde96b17b228b9cebbde792129c6e261248804d6d6e541f09ad4fe4b8dcf0821->enter($__internal_fde96b17b228b9cebbde792129c6e261248804d6d6e541f09ad4fe4b8dcf0821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:parentEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_868aec32d473bff70d7dc53cc05b6106ac91fc270dafd1825f47c45d02ad761c->leave($__internal_868aec32d473bff70d7dc53cc05b6106ac91fc270dafd1825f47c45d02ad761c_prof);

        
        $__internal_fde96b17b228b9cebbde792129c6e261248804d6d6e541f09ad4fe4b8dcf0821->leave($__internal_fde96b17b228b9cebbde792129c6e261248804d6d6e541f09ad4fe4b8dcf0821_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_accbc7e2df5de27630c8296b7437e58450ab1be7a0eb155ad3a0fc32f754ca52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_accbc7e2df5de27630c8296b7437e58450ab1be7a0eb155ad3a0fc32f754ca52->enter($__internal_accbc7e2df5de27630c8296b7437e58450ab1be7a0eb155ad3a0fc32f754ca52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_806b13ae420bf41bdf9aaac726c97f01beb3a6ef4652e7760c01ec936652021e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806b13ae420bf41bdf9aaac726c97f01beb3a6ef4652e7760c01ec936652021e->enter($__internal_806b13ae420bf41bdf9aaac726c97f01beb3a6ef4652e7760c01ec936652021e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_806b13ae420bf41bdf9aaac726c97f01beb3a6ef4652e7760c01ec936652021e->leave($__internal_806b13ae420bf41bdf9aaac726c97f01beb3a6ef4652e7760c01ec936652021e_prof);

        
        $__internal_accbc7e2df5de27630c8296b7437e58450ab1be7a0eb155ad3a0fc32f754ca52->leave($__internal_accbc7e2df5de27630c8296b7437e58450ab1be7a0eb155ad3a0fc32f754ca52_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a52fba0cda708fd189473a990fc1bac2f34d82f7d09c0b0d119063bd5cc4175e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a52fba0cda708fd189473a990fc1bac2f34d82f7d09c0b0d119063bd5cc4175e->enter($__internal_a52fba0cda708fd189473a990fc1bac2f34d82f7d09c0b0d119063bd5cc4175e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4d596adb90612c25d89ea0f241a1f487a8bb65dbafcaafce647cd92796b362ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d596adb90612c25d89ea0f241a1f487a8bb65dbafcaafce647cd92796b362ae->enter($__internal_4d596adb90612c25d89ea0f241a1f487a8bb65dbafcaafce647cd92796b362ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4d596adb90612c25d89ea0f241a1f487a8bb65dbafcaafce647cd92796b362ae->leave($__internal_4d596adb90612c25d89ea0f241a1f487a8bb65dbafcaafce647cd92796b362ae_prof);

        
        $__internal_a52fba0cda708fd189473a990fc1bac2f34d82f7d09c0b0d119063bd5cc4175e->leave($__internal_a52fba0cda708fd189473a990fc1bac2f34d82f7d09c0b0d119063bd5cc4175e_prof);

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


", ":elevesViews:parentEleve.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/elevesViews/parentEleve.html.twig");
    }
}
