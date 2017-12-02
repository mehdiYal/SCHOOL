<?php

/* baseListSuper.html.twig */
class __TwigTemplate_f681ab2f509c64ef40f77821ea633fe9f93155e9f57e84269a0e6cc7812cc00f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseSuper.html.twig", "baseListSuper.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseSuper.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47e4c2716f544e36a1120dfcf842badbc696c7f050244a387f1a758e9018edae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e4c2716f544e36a1120dfcf842badbc696c7f050244a387f1a758e9018edae->enter($__internal_47e4c2716f544e36a1120dfcf842badbc696c7f050244a387f1a758e9018edae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseListSuper.html.twig"));

        $__internal_e982d89f12efbe6b92b3b82a2457571f51beff1d7ded66fd5649d27a9363e947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e982d89f12efbe6b92b3b82a2457571f51beff1d7ded66fd5649d27a9363e947->enter($__internal_e982d89f12efbe6b92b3b82a2457571f51beff1d7ded66fd5649d27a9363e947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseListSuper.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47e4c2716f544e36a1120dfcf842badbc696c7f050244a387f1a758e9018edae->leave($__internal_47e4c2716f544e36a1120dfcf842badbc696c7f050244a387f1a758e9018edae_prof);

        
        $__internal_e982d89f12efbe6b92b3b82a2457571f51beff1d7ded66fd5649d27a9363e947->leave($__internal_e982d89f12efbe6b92b3b82a2457571f51beff1d7ded66fd5649d27a9363e947_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_28fd0755a8b2b6f7890c7d9b1665cd6ce9ef64ea1cc8c765202a00e86b81cad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28fd0755a8b2b6f7890c7d9b1665cd6ce9ef64ea1cc8c765202a00e86b81cad1->enter($__internal_28fd0755a8b2b6f7890c7d9b1665cd6ce9ef64ea1cc8c765202a00e86b81cad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c818ec2fb16a04bc4d0fc8e0290834165de4b80080e5906d2d2216a06eb96fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c818ec2fb16a04bc4d0fc8e0290834165de4b80080e5906d2d2216a06eb96fbb->enter($__internal_c818ec2fb16a04bc4d0fc8e0290834165de4b80080e5906d2d2216a06eb96fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
\t<!-- PAGE CONTENT WRAPPER -->
        <div class=\"page-content-wrap\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    
                    <!-- START DATATABLE EXPORT -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</h3>
                            <div class=\"btn-group pull-right\">
                                <button class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bars\"></i> Export Data</button>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'json',escape:'false'});\"><img src='";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/json.png"), "html", null, true);
        echo "' width=\"24\"/> JSON</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});\"><img src='";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/json.png"), "html", null, true);
        echo "' width=\"24\"/> JSON (ignoreColumn)</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'json',escape:'true'});\"><img src='";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/json.png"), "html", null, true);
        echo "' width=\"24\"/> JSON (with Escape)</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'xml',escape:'false'});\"><img src='";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/xml.png"), "html", null, true);
        echo "' width=\"24\"/> XML</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'sql'});\"><img src='";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/sql.png"), "html", null, true);
        echo "' width=\"24\"/> SQL</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'csv',escape:'false'});\"><img src='";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/csv.png"), "html", null, true);
        echo "' width=\"24\"/> CSV</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'txt',escape:'false'});\"><img src='";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/txt.png"), "html", null, true);
        echo "' width=\"24\"/> TXT</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'excel',escape:'false'});\"><img src='";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/xls.png"), "html", null, true);
        echo "' width=\"24\"/> XLS</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'doc',escape:'false'});\"><img src='";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/word.png"), "html", null, true);
        echo "' width=\"24\"/> Word</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'powerpoint',escape:'false'});\"><img src='";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/ppt.png"), "html", null, true);
        echo "' width=\"24\"/> PowerPoint</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'png',escape:'false'});\"><img src='";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/png.png"), "html", null, true);
        echo "' width=\"24\"/> PNG</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'pdf',escape:'false'});\"><img src='";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/pdf.png"), "html", null, true);
        echo "' width=\"24\"/> PDF</a></li>
                                </ul>
                            </div>                                    
                            
                        </div>
                        <div class=\"panel-body\">
                           ";
        // line 37
        $this->displayBlock('bodyList', $context, $blocks);
        // line 39
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>

\t
";
        
        $__internal_c818ec2fb16a04bc4d0fc8e0290834165de4b80080e5906d2d2216a06eb96fbb->leave($__internal_c818ec2fb16a04bc4d0fc8e0290834165de4b80080e5906d2d2216a06eb96fbb_prof);

        
        $__internal_28fd0755a8b2b6f7890c7d9b1665cd6ce9ef64ea1cc8c765202a00e86b81cad1->leave($__internal_28fd0755a8b2b6f7890c7d9b1665cd6ce9ef64ea1cc8c765202a00e86b81cad1_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_70bcf6fa950cc71b3ed3ead8501fc756ee0dea4029f4964632bfc231864adef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70bcf6fa950cc71b3ed3ead8501fc756ee0dea4029f4964632bfc231864adef4->enter($__internal_70bcf6fa950cc71b3ed3ead8501fc756ee0dea4029f4964632bfc231864adef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_42e04a266fa75bc93503678b10713594cdb9a81ac9d436f5bae84c59fb0f682c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e04a266fa75bc93503678b10713594cdb9a81ac9d436f5bae84c59fb0f682c->enter($__internal_42e04a266fa75bc93503678b10713594cdb9a81ac9d436f5bae84c59fb0f682c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_42e04a266fa75bc93503678b10713594cdb9a81ac9d436f5bae84c59fb0f682c->leave($__internal_42e04a266fa75bc93503678b10713594cdb9a81ac9d436f5bae84c59fb0f682c_prof);

        
        $__internal_70bcf6fa950cc71b3ed3ead8501fc756ee0dea4029f4964632bfc231864adef4->leave($__internal_70bcf6fa950cc71b3ed3ead8501fc756ee0dea4029f4964632bfc231864adef4_prof);

    }

    // line 37
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_5a38d97f8c9e1bc4dc5c9cc39566912d2ec44b1d489eb45eb1f8a86ccfebdc6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a38d97f8c9e1bc4dc5c9cc39566912d2ec44b1d489eb45eb1f8a86ccfebdc6e->enter($__internal_5a38d97f8c9e1bc4dc5c9cc39566912d2ec44b1d489eb45eb1f8a86ccfebdc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_e4b01028ec4f035f8a12240b77ab46096d736c4c307ff155ad93cb97d045e5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b01028ec4f035f8a12240b77ab46096d736c4c307ff155ad93cb97d045e5af->enter($__internal_e4b01028ec4f035f8a12240b77ab46096d736c4c307ff155ad93cb97d045e5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 38
        echo "                           ";
        
        $__internal_e4b01028ec4f035f8a12240b77ab46096d736c4c307ff155ad93cb97d045e5af->leave($__internal_e4b01028ec4f035f8a12240b77ab46096d736c4c307ff155ad93cb97d045e5af_prof);

        
        $__internal_5a38d97f8c9e1bc4dc5c9cc39566912d2ec44b1d489eb45eb1f8a86ccfebdc6e->leave($__internal_5a38d97f8c9e1bc4dc5c9cc39566912d2ec44b1d489eb45eb1f8a86ccfebdc6e_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a11a95665c2916391d354a321b9cd85d125d167da0c2a698d63eed58e6252b84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11a95665c2916391d354a321b9cd85d125d167da0c2a698d63eed58e6252b84->enter($__internal_a11a95665c2916391d354a321b9cd85d125d167da0c2a698d63eed58e6252b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ebbc588c02853e2a4f17fd563e96477e56dcbd8997a1d94e3d98afb96c42b679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebbc588c02853e2a4f17fd563e96477e56dcbd8997a1d94e3d98afb96c42b679->enter($__internal_ebbc588c02853e2a4f17fd563e96477e56dcbd8997a1d94e3d98afb96c42b679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "        
    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/tableExport.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jquery.base64.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/html2canvas.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jspdf/libs/sprintf.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jspdf/jspdf.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jspdf/libs/base64.js"), "html", null, true);
        echo "\"></script>        
       

";
        
        $__internal_ebbc588c02853e2a4f17fd563e96477e56dcbd8997a1d94e3d98afb96c42b679->leave($__internal_ebbc588c02853e2a4f17fd563e96477e56dcbd8997a1d94e3d98afb96c42b679_prof);

        
        $__internal_a11a95665c2916391d354a321b9cd85d125d167da0c2a698d63eed58e6252b84->leave($__internal_a11a95665c2916391d354a321b9cd85d125d167da0c2a698d63eed58e6252b84_prof);

    }

    public function getTemplateName()
    {
        return "baseListSuper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 56,  214 => 55,  210 => 54,  206 => 53,  202 => 52,  198 => 51,  194 => 50,  191 => 49,  182 => 48,  172 => 38,  163 => 37,  146 => 12,  129 => 39,  127 => 37,  118 => 31,  114 => 30,  109 => 28,  105 => 27,  101 => 26,  96 => 24,  92 => 23,  87 => 21,  83 => 20,  78 => 18,  74 => 17,  70 => 16,  63 => 12,  52 => 3,  43 => 2,  11 => 1,);
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
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">{% block title %}{% endblock %}</h3>
                            <div class=\"btn-group pull-right\">
                                <button class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bars\"></i> Export Data</button>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'json',escape:'false'});\"><img src='{{ asset(\"img/icons/json.png\")}}' width=\"24\"/> JSON</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});\"><img src='{{ asset(\"img/icons/json.png\")}}' width=\"24\"/> JSON (ignoreColumn)</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'json',escape:'true'});\"><img src='{{ asset(\"img/icons/json.png\")}}' width=\"24\"/> JSON (with Escape)</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'xml',escape:'false'});\"><img src='{{ asset(\"img/icons/xml.png\")}}' width=\"24\"/> XML</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'sql'});\"><img src='{{ asset(\"img/icons/sql.png\")}}' width=\"24\"/> SQL</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'csv',escape:'false'});\"><img src='{{ asset(\"img/icons/csv.png\")}}' width=\"24\"/> CSV</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'txt',escape:'false'});\"><img src='{{ asset(\"img/icons/txt.png\")}}' width=\"24\"/> TXT</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'excel',escape:'false'});\"><img src='{{ asset(\"img/icons/xls.png\")}}' width=\"24\"/> XLS</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'doc',escape:'false'});\"><img src='{{ asset(\"img/icons/word.png\")}}' width=\"24\"/> Word</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'powerpoint',escape:'false'});\"><img src='{{ asset(\"img/icons/ppt.png\")}}' width=\"24\"/> PowerPoint</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'png',escape:'false'});\"><img src='{{ asset(\"img/icons/png.png\")}}' width=\"24\"/> PNG</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'pdf',escape:'false'});\"><img src='{{ asset(\"img/icons/pdf.png\")}}' width=\"24\"/> PDF</a></li>
                                </ul>
                            </div>                                    
                            
                        </div>
                        <div class=\"panel-body\">
                           {% block bodyList %}
                           {% endblock %}
                        </div>
                    </div>
                </div>
            </div>
        </div>

\t
{% endblock %}

{% block javascripts %}
        
    <script type=\"text/javascript\" src=\"{{ asset('js/plugins/datatables/jquery.dataTables.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/tableExport.js')}}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/jquery.base64.js')}}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/html2canvas.js')}}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/jspdf/libs/sprintf.js')}}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/jspdf/jspdf.js')}}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/jspdf/libs/base64.js')}}\"></script>        
       

{% endblock %}  ", "baseListSuper.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/baseListSuper.html.twig");
    }
}
