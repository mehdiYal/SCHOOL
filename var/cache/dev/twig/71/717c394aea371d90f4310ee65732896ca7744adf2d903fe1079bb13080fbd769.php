<?php

/* message/show.html.twig */
class __TwigTemplate_3f7a74b74aea5a6f8cc79774496f4cacb5253132f17c2249311715a41b521ad5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "message/show.html.twig", 1);
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
        $__internal_1a349cddd6beb78e055be3d5c71e2444a66f1bc0f63c4dced7fd971493e84214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a349cddd6beb78e055be3d5c71e2444a66f1bc0f63c4dced7fd971493e84214->enter($__internal_1a349cddd6beb78e055be3d5c71e2444a66f1bc0f63c4dced7fd971493e84214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "message/show.html.twig"));

        $__internal_4c1efa38e982baaf1f0c720a2f0cb261e08992fdca5b7c4cc6ab5e3227499476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1efa38e982baaf1f0c720a2f0cb261e08992fdca5b7c4cc6ab5e3227499476->enter($__internal_4c1efa38e982baaf1f0c720a2f0cb261e08992fdca5b7c4cc6ab5e3227499476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "message/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a349cddd6beb78e055be3d5c71e2444a66f1bc0f63c4dced7fd971493e84214->leave($__internal_1a349cddd6beb78e055be3d5c71e2444a66f1bc0f63c4dced7fd971493e84214_prof);

        
        $__internal_4c1efa38e982baaf1f0c720a2f0cb261e08992fdca5b7c4cc6ab5e3227499476->leave($__internal_4c1efa38e982baaf1f0c720a2f0cb261e08992fdca5b7c4cc6ab5e3227499476_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_caebe13387891230a8eb7e261c561efe49564effad8ba77c377866deaf593ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caebe13387891230a8eb7e261c561efe49564effad8ba77c377866deaf593ab4->enter($__internal_caebe13387891230a8eb7e261c561efe49564effad8ba77c377866deaf593ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e2dd5d88e529ca06006b6ffa44da907e126797f8f635b52bcdacb4a6c04cbfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2dd5d88e529ca06006b6ffa44da907e126797f8f635b52bcdacb4a6c04cbfc->enter($__internal_3e2dd5d88e529ca06006b6ffa44da907e126797f8f635b52bcdacb4a6c04cbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
 <!-- START CONTENT FRAME -->
                <div class=\"content-frame\">                                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class=\"content-frame-top\">
                        <div class=\"page-title\">                   
                            <h2><span class=\"fa fa-pencil\"></span> Compose</h2>
                        </div>                         
                        
                        <div class=\"pull-right\">                                                                                    
                            <button class=\"btn btn-default\"><span class=\"fa fa-cogs\"></span> Settings</button>
                            <button class=\"btn btn-default\"><span class=\"fa fa-floppy-o\"></span> Save</button>
                            <button class=\"btn btn-default content-frame-left-toggle\"><span class=\"fa fa-bars\"></span></button>
                        </div>
                    </div>
                    <!-- END CONTENT FRAME TOP -->
                    
                    <!-- START CONTENT FRAME LEFT -->
                    <div class=\"content-frame-left\">
                        <div class=\"block\">
                            <div class=\"list-group border-bottom\">
                                <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_inbox");
        echo "\" class=\"list-group-item\"><span class=\"fa fa-inbox\"></span> Inbox <span class=\"badge badge-success\">";
        echo twig_escape_filter($this->env, ($context["newMessages"] ?? $this->getContext($context, "newMessages")), "html", null, true);
        echo "</span></a>
                                <!-- <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-star\"></span> Starred <span class=\"badge badge-warning\">6</span></a> -->
                                <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_sentbox");
        echo "\" class=\"list-group-item\"><span class=\"fa fa-rocket\"></span> Sent</a>
                               <!--  <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-flag\"></span> Flagged</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-trash-o\"></span> Deleted <span class=\"badge badge-default\">1.4k</span></a> -->                            
                            </div>                        
                        </div>
                        <div class=\"block\">
                            <h4>Labels</h4>
                            <div class=\"list-group list-group-simple\">                                
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-success\"></span> Clients</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-warning\"></span> Social</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-danger\"></span> Work</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-info\"></span> Family</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-primary\"></span> Friends</a>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT FRAME LEFT -->
                    
                    <!-- START CONTENT FRAME BODY -->
                    <div class=\"content-frame-body\">
                        
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <div class=\"pull-left\">
                                    <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "createdBy", array()), "photo", array()))), "html", null, true);
        echo "\" class=\"panel-title-image\" alt=\"John Doe\"/>
                                    <h3 class=\"panel-title\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "createdBy", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "createdBy", array()), "prenom", array()), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "createdBy", array()), "email", array()), "html", null, true);
        echo "</small></h3>
                                </div>
                                <div class=\"pull-right\">
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-reply\"></span></button>
                                    <button class=\"btn btn-default\"><span class=\"fa fa-warning\"></span></button>
                                    <button class=\"btn btn-default\"><span class=\"fa fa-trash-o\"></span></button>                                    
                                </div>
                            </div>
                            <div class=\"panel-body\">
                                <h3>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "subject", array()), "html", null, true);
        echo " <small class=\"pull-right text-muted\"><span class=\"fa fa-clock-o\"></span> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "createdAt", array()), "F jS \\a\\t g:ia"), "html", null, true);
        echo "</small></h3>
                                ";
        // line 62
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "messages", array()), 0, array(), "array"), "body", array());
        echo "     
                                
                                <div class=\"form-group push-up-20\">
                                    <label>Quick Reply</label>
                                    <textarea class=\"form-control summernote_lite\" rows=\"3\" placeholder=\"Click to get editor\"></textarea>
                                </div>
                            </div>
                            <div class=\"panel-body panel-body-table\">
                                <h6>Attachments</h6>
                                <table class=\"table table-bordered table-striped\">
                                    <tr>
                                        <th width=\"50\">type</th><th>name</th><th width=\"100\">size</th>
                                    </tr>
                                    <tr>
                                        <td><span class=\"label label-primary\">HTML</span></td><td><a href=\"#\">index.html</a></td><td>54 Kb</td>
                                    </tr>
                                    <tr>
                                        <td><span class=\"label label-success\">CSS</span></td><td><a href=\"#\">stylesheet.css</a></td><td>15 Kb</td>
                                    </tr>                                    
                                    <tr>
                                        <td><span class=\"label label-danger\">JS</span></td><td><a href=\"#\">actions.js</a></td><td>3 Kb</td>
                                    </tr>                                    
                                </table>
                            </div>
                            <div class=\"panel-footer\">
                                <button class=\"btn btn-success pull-right\"><span class=\"fa fa-mail-reply\"></span> Post Reply</button>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT FRAME BODY -->
                    
                </div>
                <!-- END CONTENT FRAME -->                
                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"mb-signout\">
            <div class=\"mb-container\">
                <div class=\"mb-middle\">
                    <div class=\"mb-title\"><span class=\"fa fa-sign-out\"></span> Log <strong>Out</strong> ?</div>
                    <div class=\"mb-content\">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class=\"mb-footer\">
                        <div class=\"pull-right\">
                            <a href=\"pages-login.html\" class=\"btn btn-success btn-lg\">Yes</a>
                            <button class=\"btn btn-default btn-lg mb-control-close\">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->


";
        
        $__internal_3e2dd5d88e529ca06006b6ffa44da907e126797f8f635b52bcdacb4a6c04cbfc->leave($__internal_3e2dd5d88e529ca06006b6ffa44da907e126797f8f635b52bcdacb4a6c04cbfc_prof);

        
        $__internal_caebe13387891230a8eb7e261c561efe49564effad8ba77c377866deaf593ab4->leave($__internal_caebe13387891230a8eb7e261c561efe49564effad8ba77c377866deaf593ab4_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a02f1387b6e4dec353fd896b863c850280bf086ccb50ecf69c7b86c5f03ac79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a02f1387b6e4dec353fd896b863c850280bf086ccb50ecf69c7b86c5f03ac79->enter($__internal_1a02f1387b6e4dec353fd896b863c850280bf086ccb50ecf69c7b86c5f03ac79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_43096562144f285bddc4ba4dcf7d384a1e98b249f909cee3bb0c5f7d97c9403d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43096562144f285bddc4ba4dcf7d384a1e98b249f909cee3bb0c5f7d97c9403d->enter($__internal_43096562144f285bddc4ba4dcf7d384a1e98b249f909cee3bb0c5f7d97c9403d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
        echo "    <script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/summernote/summernote.js"), "html", null, true);
        echo "\"></script>  
    <script type='text/javascript' src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tagsinput/jquery.tagsinput.min.js"), "html", null, true);
        echo "\"></script> 
    <script type='text/javascript' src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script> 
    <script type='text/javascript' src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-file-input.js"), "html", null, true);
        echo "\"></script>          

";
        
        $__internal_43096562144f285bddc4ba4dcf7d384a1e98b249f909cee3bb0c5f7d97c9403d->leave($__internal_43096562144f285bddc4ba4dcf7d384a1e98b249f909cee3bb0c5f7d97c9403d_prof);

        
        $__internal_1a02f1387b6e4dec353fd896b863c850280bf086ccb50ecf69c7b86c5f03ac79->leave($__internal_1a02f1387b6e4dec353fd896b863c850280bf086ccb50ecf69c7b86c5f03ac79_prof);

    }

    public function getTemplateName()
    {
        return "message/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 129,  222 => 128,  218 => 127,  213 => 126,  204 => 125,  133 => 62,  127 => 61,  111 => 52,  107 => 51,  80 => 27,  73 => 25,  50 => 4,  41 => 3,  11 => 1,);
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

 <!-- START CONTENT FRAME -->
                <div class=\"content-frame\">                                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class=\"content-frame-top\">
                        <div class=\"page-title\">                   
                            <h2><span class=\"fa fa-pencil\"></span> Compose</h2>
                        </div>                         
                        
                        <div class=\"pull-right\">                                                                                    
                            <button class=\"btn btn-default\"><span class=\"fa fa-cogs\"></span> Settings</button>
                            <button class=\"btn btn-default\"><span class=\"fa fa-floppy-o\"></span> Save</button>
                            <button class=\"btn btn-default content-frame-left-toggle\"><span class=\"fa fa-bars\"></span></button>
                        </div>
                    </div>
                    <!-- END CONTENT FRAME TOP -->
                    
                    <!-- START CONTENT FRAME LEFT -->
                    <div class=\"content-frame-left\">
                        <div class=\"block\">
                            <div class=\"list-group border-bottom\">
                                <a href=\"{{ path('message_inbox')}}\" class=\"list-group-item\"><span class=\"fa fa-inbox\"></span> Inbox <span class=\"badge badge-success\">{{newMessages}}</span></a>
                                <!-- <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-star\"></span> Starred <span class=\"badge badge-warning\">6</span></a> -->
                                <a href=\"{{ path('message_sentbox')}}\" class=\"list-group-item\"><span class=\"fa fa-rocket\"></span> Sent</a>
                               <!--  <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-flag\"></span> Flagged</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-trash-o\"></span> Deleted <span class=\"badge badge-default\">1.4k</span></a> -->                            
                            </div>                        
                        </div>
                        <div class=\"block\">
                            <h4>Labels</h4>
                            <div class=\"list-group list-group-simple\">                                
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-success\"></span> Clients</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-warning\"></span> Social</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-danger\"></span> Work</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-info\"></span> Family</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-primary\"></span> Friends</a>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT FRAME LEFT -->
                    
                    <!-- START CONTENT FRAME BODY -->
                    <div class=\"content-frame-body\">
                        
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <div class=\"pull-left\">
                                    <img src=\"{{asset('uploads/photos/'~ thread.createdBy.photo)}}\" class=\"panel-title-image\" alt=\"John Doe\"/>
                                    <h3 class=\"panel-title\">{{thread.createdBy.nom}} {{thread.createdBy.prenom}} <small>{{thread.createdBy.email}}</small></h3>
                                </div>
                                <div class=\"pull-right\">
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-reply\"></span></button>
                                    <button class=\"btn btn-default\"><span class=\"fa fa-warning\"></span></button>
                                    <button class=\"btn btn-default\"><span class=\"fa fa-trash-o\"></span></button>                                    
                                </div>
                            </div>
                            <div class=\"panel-body\">
                                <h3>{{thread.subject}} <small class=\"pull-right text-muted\"><span class=\"fa fa-clock-o\"></span> {{thread.createdAt|date(\"F jS \\\\a\\\\t g:ia\")}}</small></h3>
                                {{thread.messages[0].body|raw}}     
                                
                                <div class=\"form-group push-up-20\">
                                    <label>Quick Reply</label>
                                    <textarea class=\"form-control summernote_lite\" rows=\"3\" placeholder=\"Click to get editor\"></textarea>
                                </div>
                            </div>
                            <div class=\"panel-body panel-body-table\">
                                <h6>Attachments</h6>
                                <table class=\"table table-bordered table-striped\">
                                    <tr>
                                        <th width=\"50\">type</th><th>name</th><th width=\"100\">size</th>
                                    </tr>
                                    <tr>
                                        <td><span class=\"label label-primary\">HTML</span></td><td><a href=\"#\">index.html</a></td><td>54 Kb</td>
                                    </tr>
                                    <tr>
                                        <td><span class=\"label label-success\">CSS</span></td><td><a href=\"#\">stylesheet.css</a></td><td>15 Kb</td>
                                    </tr>                                    
                                    <tr>
                                        <td><span class=\"label label-danger\">JS</span></td><td><a href=\"#\">actions.js</a></td><td>3 Kb</td>
                                    </tr>                                    
                                </table>
                            </div>
                            <div class=\"panel-footer\">
                                <button class=\"btn btn-success pull-right\"><span class=\"fa fa-mail-reply\"></span> Post Reply</button>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT FRAME BODY -->
                    
                </div>
                <!-- END CONTENT FRAME -->                
                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"mb-signout\">
            <div class=\"mb-container\">
                <div class=\"mb-middle\">
                    <div class=\"mb-title\"><span class=\"fa fa-sign-out\"></span> Log <strong>Out</strong> ?</div>
                    <div class=\"mb-content\">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class=\"mb-footer\">
                        <div class=\"pull-right\">
                            <a href=\"pages-login.html\" class=\"btn btn-success btn-lg\">Yes</a>
                            <button class=\"btn btn-default btn-lg mb-control-close\">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->


{% endblock %}


{% block javascripts %}
    <script type='text/javascript' src=\"{{ asset('js/plugins/summernote/summernote.js') }}\"></script>  
    <script type='text/javascript' src=\"{{ asset('js/plugins/tagsinput/jquery.tagsinput.min.js') }}\"></script> 
    <script type='text/javascript' src=\"{{ asset('js/plugins/bootstrap/bootstrap-select.js') }}\"></script> 
    <script type='text/javascript' src=\"{{ asset('js/plugins/bootstrap/bootstrap-file-input.js') }}\"></script>          

{% endblock %}", "message/show.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/message/show.html.twig");
    }
}
