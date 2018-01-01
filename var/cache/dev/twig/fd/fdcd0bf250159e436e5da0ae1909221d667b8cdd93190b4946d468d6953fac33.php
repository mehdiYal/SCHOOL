<?php

/* baseListSuper.html.twig */
class __TwigTemplate_7d6e53cae881b1c7eefd6adf84e2a76646dc454fdd9066516e1763ddd3adee30 extends Twig_Template
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
        $__internal_5c184d6cb0fcf1e24b9203654143c95b08b41df71dd3642bc9a743da09095641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c184d6cb0fcf1e24b9203654143c95b08b41df71dd3642bc9a743da09095641->enter($__internal_5c184d6cb0fcf1e24b9203654143c95b08b41df71dd3642bc9a743da09095641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseListSuper.html.twig"));

        $__internal_060d73792b2db8a481d5ccd9f34dcd1391e08a43b48390b5ba9c7926d8dd671d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060d73792b2db8a481d5ccd9f34dcd1391e08a43b48390b5ba9c7926d8dd671d->enter($__internal_060d73792b2db8a481d5ccd9f34dcd1391e08a43b48390b5ba9c7926d8dd671d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseListSuper.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c184d6cb0fcf1e24b9203654143c95b08b41df71dd3642bc9a743da09095641->leave($__internal_5c184d6cb0fcf1e24b9203654143c95b08b41df71dd3642bc9a743da09095641_prof);

        
        $__internal_060d73792b2db8a481d5ccd9f34dcd1391e08a43b48390b5ba9c7926d8dd671d->leave($__internal_060d73792b2db8a481d5ccd9f34dcd1391e08a43b48390b5ba9c7926d8dd671d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_091612136488742e72eb7f9e9cc7b33347a2147cdbb840c325682871f53cecf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_091612136488742e72eb7f9e9cc7b33347a2147cdbb840c325682871f53cecf4->enter($__internal_091612136488742e72eb7f9e9cc7b33347a2147cdbb840c325682871f53cecf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da751a0d93a23e2ede844f90274d8aeee4770247044019b92f7f834a8223e6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da751a0d93a23e2ede844f90274d8aeee4770247044019b92f7f834a8223e6d8->enter($__internal_da751a0d93a23e2ede844f90274d8aeee4770247044019b92f7f834a8223e6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_da751a0d93a23e2ede844f90274d8aeee4770247044019b92f7f834a8223e6d8->leave($__internal_da751a0d93a23e2ede844f90274d8aeee4770247044019b92f7f834a8223e6d8_prof);

        
        $__internal_091612136488742e72eb7f9e9cc7b33347a2147cdbb840c325682871f53cecf4->leave($__internal_091612136488742e72eb7f9e9cc7b33347a2147cdbb840c325682871f53cecf4_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_f618e6a2390f5a636b606bf9000d79e07253fbe683632711a2bd1f26d485b7b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f618e6a2390f5a636b606bf9000d79e07253fbe683632711a2bd1f26d485b7b4->enter($__internal_f618e6a2390f5a636b606bf9000d79e07253fbe683632711a2bd1f26d485b7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a40d605b88bc145b51b9bbe5d2e65c05a389f41b09b7859e3dd6357cd759a0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a40d605b88bc145b51b9bbe5d2e65c05a389f41b09b7859e3dd6357cd759a0e->enter($__internal_5a40d605b88bc145b51b9bbe5d2e65c05a389f41b09b7859e3dd6357cd759a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5a40d605b88bc145b51b9bbe5d2e65c05a389f41b09b7859e3dd6357cd759a0e->leave($__internal_5a40d605b88bc145b51b9bbe5d2e65c05a389f41b09b7859e3dd6357cd759a0e_prof);

        
        $__internal_f618e6a2390f5a636b606bf9000d79e07253fbe683632711a2bd1f26d485b7b4->leave($__internal_f618e6a2390f5a636b606bf9000d79e07253fbe683632711a2bd1f26d485b7b4_prof);

    }

    // line 37
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_25fb9e3b5c5b6dd3e976d9694f1f008eca7ec01696f247691f548842217de3f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25fb9e3b5c5b6dd3e976d9694f1f008eca7ec01696f247691f548842217de3f4->enter($__internal_25fb9e3b5c5b6dd3e976d9694f1f008eca7ec01696f247691f548842217de3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_f61c29dccbab1b3e8f8242fc39ac4aae1f71d57067dd24c7320b2f2b4ef99d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61c29dccbab1b3e8f8242fc39ac4aae1f71d57067dd24c7320b2f2b4ef99d30->enter($__internal_f61c29dccbab1b3e8f8242fc39ac4aae1f71d57067dd24c7320b2f2b4ef99d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 38
        echo "                           ";
        
        $__internal_f61c29dccbab1b3e8f8242fc39ac4aae1f71d57067dd24c7320b2f2b4ef99d30->leave($__internal_f61c29dccbab1b3e8f8242fc39ac4aae1f71d57067dd24c7320b2f2b4ef99d30_prof);

        
        $__internal_25fb9e3b5c5b6dd3e976d9694f1f008eca7ec01696f247691f548842217de3f4->leave($__internal_25fb9e3b5c5b6dd3e976d9694f1f008eca7ec01696f247691f548842217de3f4_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b17615c99b77c1599f07ba5fd56909fcedefce8d4c2bc38b8a494dd84ee94d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b17615c99b77c1599f07ba5fd56909fcedefce8d4c2bc38b8a494dd84ee94d35->enter($__internal_b17615c99b77c1599f07ba5fd56909fcedefce8d4c2bc38b8a494dd84ee94d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7e2b59319a79d272d7b7ea9944b2ab92fba312b3ea9926ad52fbaff453407a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2b59319a79d272d7b7ea9944b2ab92fba312b3ea9926ad52fbaff453407a90->enter($__internal_7e2b59319a79d272d7b7ea9944b2ab92fba312b3ea9926ad52fbaff453407a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7e2b59319a79d272d7b7ea9944b2ab92fba312b3ea9926ad52fbaff453407a90->leave($__internal_7e2b59319a79d272d7b7ea9944b2ab92fba312b3ea9926ad52fbaff453407a90_prof);

        
        $__internal_b17615c99b77c1599f07ba5fd56909fcedefce8d4c2bc38b8a494dd84ee94d35->leave($__internal_b17615c99b77c1599f07ba5fd56909fcedefce8d4c2bc38b8a494dd84ee94d35_prof);

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
       

{% endblock %}  ", "baseListSuper.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/baseListSuper.html.twig");
    }
}
