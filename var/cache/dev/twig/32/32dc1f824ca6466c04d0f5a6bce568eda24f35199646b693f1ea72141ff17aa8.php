<?php

/* baseList.html.twig */
class __TwigTemplate_e7201da6d8c973d4c1ebf78048e8594a40f4c98ba89aebf90dd7a8b40597bbe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "baseList.html.twig", 1);
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
        $__internal_f1195a3586a9deec940351a7a07b4cf9bbeed6e66bbeeb9b9dedfaab4a686e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1195a3586a9deec940351a7a07b4cf9bbeed6e66bbeeb9b9dedfaab4a686e4d->enter($__internal_f1195a3586a9deec940351a7a07b4cf9bbeed6e66bbeeb9b9dedfaab4a686e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseList.html.twig"));

        $__internal_2f0cc32b72fdbf40727f4ec287a55d5b978b49206d2de11d9fde39493d99fc45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0cc32b72fdbf40727f4ec287a55d5b978b49206d2de11d9fde39493d99fc45->enter($__internal_2f0cc32b72fdbf40727f4ec287a55d5b978b49206d2de11d9fde39493d99fc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1195a3586a9deec940351a7a07b4cf9bbeed6e66bbeeb9b9dedfaab4a686e4d->leave($__internal_f1195a3586a9deec940351a7a07b4cf9bbeed6e66bbeeb9b9dedfaab4a686e4d_prof);

        
        $__internal_2f0cc32b72fdbf40727f4ec287a55d5b978b49206d2de11d9fde39493d99fc45->leave($__internal_2f0cc32b72fdbf40727f4ec287a55d5b978b49206d2de11d9fde39493d99fc45_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e86f233d10e2972ebefd3d6d38de2b6684d77af13edf294e82fef19dc1d8c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e86f233d10e2972ebefd3d6d38de2b6684d77af13edf294e82fef19dc1d8c0b->enter($__internal_3e86f233d10e2972ebefd3d6d38de2b6684d77af13edf294e82fef19dc1d8c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c2ba281480f3bc8278d5bea215459f544c6b784fcae46c485323f2f450a09b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2ba281480f3bc8278d5bea215459f544c6b784fcae46c485323f2f450a09b9->enter($__internal_7c2ba281480f3bc8278d5bea215459f544c6b784fcae46c485323f2f450a09b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7c2ba281480f3bc8278d5bea215459f544c6b784fcae46c485323f2f450a09b9->leave($__internal_7c2ba281480f3bc8278d5bea215459f544c6b784fcae46c485323f2f450a09b9_prof);

        
        $__internal_3e86f233d10e2972ebefd3d6d38de2b6684d77af13edf294e82fef19dc1d8c0b->leave($__internal_3e86f233d10e2972ebefd3d6d38de2b6684d77af13edf294e82fef19dc1d8c0b_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f67b60877355b274f8b76643ec5ce6d0c93800353c4006cab4fe50c5a17b87c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f67b60877355b274f8b76643ec5ce6d0c93800353c4006cab4fe50c5a17b87c->enter($__internal_1f67b60877355b274f8b76643ec5ce6d0c93800353c4006cab4fe50c5a17b87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_55246a921b578d3a827c94c5fb604a80bc367ab22a3ffef152acf248dc70228e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55246a921b578d3a827c94c5fb604a80bc367ab22a3ffef152acf248dc70228e->enter($__internal_55246a921b578d3a827c94c5fb604a80bc367ab22a3ffef152acf248dc70228e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_55246a921b578d3a827c94c5fb604a80bc367ab22a3ffef152acf248dc70228e->leave($__internal_55246a921b578d3a827c94c5fb604a80bc367ab22a3ffef152acf248dc70228e_prof);

        
        $__internal_1f67b60877355b274f8b76643ec5ce6d0c93800353c4006cab4fe50c5a17b87c->leave($__internal_1f67b60877355b274f8b76643ec5ce6d0c93800353c4006cab4fe50c5a17b87c_prof);

    }

    // line 37
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_4500c5e9daa83dd5b460f3be2c9e43c77737cd91633fd96ae851b8ffe7866ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4500c5e9daa83dd5b460f3be2c9e43c77737cd91633fd96ae851b8ffe7866ebc->enter($__internal_4500c5e9daa83dd5b460f3be2c9e43c77737cd91633fd96ae851b8ffe7866ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_e55bfb4b1d144927bf2a21458137f58ccf029860ea7ab17cef87c1f8d9e94521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55bfb4b1d144927bf2a21458137f58ccf029860ea7ab17cef87c1f8d9e94521->enter($__internal_e55bfb4b1d144927bf2a21458137f58ccf029860ea7ab17cef87c1f8d9e94521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 38
        echo "                           ";
        
        $__internal_e55bfb4b1d144927bf2a21458137f58ccf029860ea7ab17cef87c1f8d9e94521->leave($__internal_e55bfb4b1d144927bf2a21458137f58ccf029860ea7ab17cef87c1f8d9e94521_prof);

        
        $__internal_4500c5e9daa83dd5b460f3be2c9e43c77737cd91633fd96ae851b8ffe7866ebc->leave($__internal_4500c5e9daa83dd5b460f3be2c9e43c77737cd91633fd96ae851b8ffe7866ebc_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_69b524968a1c540107cf48b488bc2d81364c3c69d05a12c00dda352741d68741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b524968a1c540107cf48b488bc2d81364c3c69d05a12c00dda352741d68741->enter($__internal_69b524968a1c540107cf48b488bc2d81364c3c69d05a12c00dda352741d68741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fbe78e9563770764d6cb81e5dd7d3c7380a559fde5920a6fad331a50049e319d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe78e9563770764d6cb81e5dd7d3c7380a559fde5920a6fad331a50049e319d->enter($__internal_fbe78e9563770764d6cb81e5dd7d3c7380a559fde5920a6fad331a50049e319d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_fbe78e9563770764d6cb81e5dd7d3c7380a559fde5920a6fad331a50049e319d->leave($__internal_fbe78e9563770764d6cb81e5dd7d3c7380a559fde5920a6fad331a50049e319d_prof);

        
        $__internal_69b524968a1c540107cf48b488bc2d81364c3c69d05a12c00dda352741d68741->leave($__internal_69b524968a1c540107cf48b488bc2d81364c3c69d05a12c00dda352741d68741_prof);

    }

    // line 58
    public function block_active($context, array $blocks = array())
    {
        $__internal_2055bf2d62aa9374375373d8fe364cbd899c4e7e7b2dc3265ef8fffddfe013b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2055bf2d62aa9374375373d8fe364cbd899c4e7e7b2dc3265ef8fffddfe013b1->enter($__internal_2055bf2d62aa9374375373d8fe364cbd899c4e7e7b2dc3265ef8fffddfe013b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_b812bbaa097f3f3ec135fe0c464e3626c317bb8682699b987f8769823bc743ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b812bbaa097f3f3ec135fe0c464e3626c317bb8682699b987f8769823bc743ca->enter($__internal_b812bbaa097f3f3ec135fe0c464e3626c317bb8682699b987f8769823bc743ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 59
        echo "    ";
        
        $__internal_b812bbaa097f3f3ec135fe0c464e3626c317bb8682699b987f8769823bc743ca->leave($__internal_b812bbaa097f3f3ec135fe0c464e3626c317bb8682699b987f8769823bc743ca_prof);

        
        $__internal_2055bf2d62aa9374375373d8fe364cbd899c4e7e7b2dc3265ef8fffddfe013b1->leave($__internal_2055bf2d62aa9374375373d8fe364cbd899c4e7e7b2dc3265ef8fffddfe013b1_prof);

    }

    public function getTemplateName()
    {
        return "baseList.html.twig";
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
       

{% endblock %}  ", "baseList.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\baseList.html.twig");
    }
}
