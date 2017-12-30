<?php

/* ::baseList.html.twig */
class __TwigTemplate_fd7aa8f538c629ba34d687c6a956e90900cb4fd9e03a53c20d093201e10bebd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "::baseList.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
            'javascripts' => array($this, 'block_javascripts'),
            'active' => array($this, 'block_active'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acf131ec50a68f953941ee031f34b15bf920d8f51e6df545b94554a66b9963fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf131ec50a68f953941ee031f34b15bf920d8f51e6df545b94554a66b9963fb->enter($__internal_acf131ec50a68f953941ee031f34b15bf920d8f51e6df545b94554a66b9963fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseList.html.twig"));

        $__internal_e44bd1d421ece0c2ab8ae51797ce4f41810f56238db9cf99a32817e8fa0b8d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44bd1d421ece0c2ab8ae51797ce4f41810f56238db9cf99a32817e8fa0b8d18->enter($__internal_e44bd1d421ece0c2ab8ae51797ce4f41810f56238db9cf99a32817e8fa0b8d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acf131ec50a68f953941ee031f34b15bf920d8f51e6df545b94554a66b9963fb->leave($__internal_acf131ec50a68f953941ee031f34b15bf920d8f51e6df545b94554a66b9963fb_prof);

        
        $__internal_e44bd1d421ece0c2ab8ae51797ce4f41810f56238db9cf99a32817e8fa0b8d18->leave($__internal_e44bd1d421ece0c2ab8ae51797ce4f41810f56238db9cf99a32817e8fa0b8d18_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4304ecc5517fe416f81c88957d593e5c269722a1051662f4852fce22f7ea904b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4304ecc5517fe416f81c88957d593e5c269722a1051662f4852fce22f7ea904b->enter($__internal_4304ecc5517fe416f81c88957d593e5c269722a1051662f4852fce22f7ea904b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0981cc71316901f7aa72e71eba8642dd7db0e7bfe09bec1f13ad489a6b46fbb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0981cc71316901f7aa72e71eba8642dd7db0e7bfe09bec1f13ad489a6b46fbb2->enter($__internal_0981cc71316901f7aa72e71eba8642dd7db0e7bfe09bec1f13ad489a6b46fbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0981cc71316901f7aa72e71eba8642dd7db0e7bfe09bec1f13ad489a6b46fbb2->leave($__internal_0981cc71316901f7aa72e71eba8642dd7db0e7bfe09bec1f13ad489a6b46fbb2_prof);

        
        $__internal_4304ecc5517fe416f81c88957d593e5c269722a1051662f4852fce22f7ea904b->leave($__internal_4304ecc5517fe416f81c88957d593e5c269722a1051662f4852fce22f7ea904b_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4be4976e6b0ac8de42a41dedcc4d9636ce7321e45aed82149b955a0e4c2db96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4be4976e6b0ac8de42a41dedcc4d9636ce7321e45aed82149b955a0e4c2db96->enter($__internal_c4be4976e6b0ac8de42a41dedcc4d9636ce7321e45aed82149b955a0e4c2db96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ef680d8a2020812232d584bb653dad8aaf20c48e27bbcc4d51fd288fb723e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef680d8a2020812232d584bb653dad8aaf20c48e27bbcc4d51fd288fb723e5c->enter($__internal_1ef680d8a2020812232d584bb653dad8aaf20c48e27bbcc4d51fd288fb723e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1ef680d8a2020812232d584bb653dad8aaf20c48e27bbcc4d51fd288fb723e5c->leave($__internal_1ef680d8a2020812232d584bb653dad8aaf20c48e27bbcc4d51fd288fb723e5c_prof);

        
        $__internal_c4be4976e6b0ac8de42a41dedcc4d9636ce7321e45aed82149b955a0e4c2db96->leave($__internal_c4be4976e6b0ac8de42a41dedcc4d9636ce7321e45aed82149b955a0e4c2db96_prof);

    }

    // line 37
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_8a7fd7aca227db04e0baf6456e1002a73f0cbed1c1671776d736ef44d906639b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a7fd7aca227db04e0baf6456e1002a73f0cbed1c1671776d736ef44d906639b->enter($__internal_8a7fd7aca227db04e0baf6456e1002a73f0cbed1c1671776d736ef44d906639b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_82138c7c1802063e536d32fe7d4688552c34eecf0a5624eaff5da24b82e8fb46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82138c7c1802063e536d32fe7d4688552c34eecf0a5624eaff5da24b82e8fb46->enter($__internal_82138c7c1802063e536d32fe7d4688552c34eecf0a5624eaff5da24b82e8fb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 38
        echo "                           ";
        
        $__internal_82138c7c1802063e536d32fe7d4688552c34eecf0a5624eaff5da24b82e8fb46->leave($__internal_82138c7c1802063e536d32fe7d4688552c34eecf0a5624eaff5da24b82e8fb46_prof);

        
        $__internal_8a7fd7aca227db04e0baf6456e1002a73f0cbed1c1671776d736ef44d906639b->leave($__internal_8a7fd7aca227db04e0baf6456e1002a73f0cbed1c1671776d736ef44d906639b_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f60a8a78197fbcfb12ee7be1aedf0bc5af1eae06a5c1fa2e03ed5b5228335a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f60a8a78197fbcfb12ee7be1aedf0bc5af1eae06a5c1fa2e03ed5b5228335a1d->enter($__internal_f60a8a78197fbcfb12ee7be1aedf0bc5af1eae06a5c1fa2e03ed5b5228335a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e09d7120fd93a0914f6e02e2e03f838a9e5c7fb1f0b891c6c13768ba1c9a999b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09d7120fd93a0914f6e02e2e03f838a9e5c7fb1f0b891c6c13768ba1c9a999b->enter($__internal_e09d7120fd93a0914f6e02e2e03f838a9e5c7fb1f0b891c6c13768ba1c9a999b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        // line 58
        $this->displayBlock('active', $context, $blocks);
        // line 59
        echo "      
       

";
        
        $__internal_e09d7120fd93a0914f6e02e2e03f838a9e5c7fb1f0b891c6c13768ba1c9a999b->leave($__internal_e09d7120fd93a0914f6e02e2e03f838a9e5c7fb1f0b891c6c13768ba1c9a999b_prof);

        
        $__internal_f60a8a78197fbcfb12ee7be1aedf0bc5af1eae06a5c1fa2e03ed5b5228335a1d->leave($__internal_f60a8a78197fbcfb12ee7be1aedf0bc5af1eae06a5c1fa2e03ed5b5228335a1d_prof);

    }

    // line 58
    public function block_active($context, array $blocks = array())
    {
        $__internal_e487f38ee9e181f62346c54efafd25a4fb660251ab960338b2db5afe6f6f569f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e487f38ee9e181f62346c54efafd25a4fb660251ab960338b2db5afe6f6f569f->enter($__internal_e487f38ee9e181f62346c54efafd25a4fb660251ab960338b2db5afe6f6f569f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_df848f198a711ae7767de24a11923cb866060adab82a670b900fcc470a4b98bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df848f198a711ae7767de24a11923cb866060adab82a670b900fcc470a4b98bd->enter($__internal_df848f198a711ae7767de24a11923cb866060adab82a670b900fcc470a4b98bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 59
        echo "    ";
        
        $__internal_df848f198a711ae7767de24a11923cb866060adab82a670b900fcc470a4b98bd->leave($__internal_df848f198a711ae7767de24a11923cb866060adab82a670b900fcc470a4b98bd_prof);

        
        $__internal_e487f38ee9e181f62346c54efafd25a4fb660251ab960338b2db5afe6f6f569f->leave($__internal_e487f38ee9e181f62346c54efafd25a4fb660251ab960338b2db5afe6f6f569f_prof);

    }

    public function getTemplateName()
    {
        return "::baseList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 59,  239 => 58,  226 => 59,  224 => 58,  219 => 56,  215 => 55,  211 => 54,  207 => 53,  203 => 52,  199 => 51,  195 => 50,  192 => 49,  183 => 48,  173 => 38,  164 => 37,  147 => 12,  130 => 39,  128 => 37,  119 => 31,  115 => 30,  110 => 28,  106 => 27,  102 => 26,  97 => 24,  93 => 23,  88 => 21,  84 => 20,  79 => 18,  75 => 17,  71 => 16,  64 => 12,  53 => 3,  44 => 2,  11 => 1,);
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

    {% block active %}
    {% endblock %}      
       

{% endblock %}  ", "::baseList.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/baseList.html.twig");
    }
}
