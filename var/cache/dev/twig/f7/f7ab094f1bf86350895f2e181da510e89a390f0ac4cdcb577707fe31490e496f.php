<?php

/* :message:show.html.twig */
class __TwigTemplate_687dd92673132e3ffb835d20e48fca71a067d808dc768f403088b751e9838361 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(((twig_in_filter("ROLE_PARENT", $this->getAttribute($this->getAttribute(        // line 1
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) ? ("baseParent.html.twig") : ("base2.html.twig")), ":message:show.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d60b9129b3d7d682e20b25bb83918018200e0d0513a57c9cfe35f971af706911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d60b9129b3d7d682e20b25bb83918018200e0d0513a57c9cfe35f971af706911->enter($__internal_d60b9129b3d7d682e20b25bb83918018200e0d0513a57c9cfe35f971af706911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":message:show.html.twig"));

        $__internal_3e5ea36561e9135b3d31b846f7ae136ec9b0c9969906464dac769c5a934b35ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5ea36561e9135b3d31b846f7ae136ec9b0c9969906464dac769c5a934b35ea->enter($__internal_3e5ea36561e9135b3d31b846f7ae136ec9b0c9969906464dac769c5a934b35ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":message:show.html.twig"));

        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d60b9129b3d7d682e20b25bb83918018200e0d0513a57c9cfe35f971af706911->leave($__internal_d60b9129b3d7d682e20b25bb83918018200e0d0513a57c9cfe35f971af706911_prof);

        
        $__internal_3e5ea36561e9135b3d31b846f7ae136ec9b0c9969906464dac769c5a934b35ea->leave($__internal_3e5ea36561e9135b3d31b846f7ae136ec9b0c9969906464dac769c5a934b35ea_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0464e703eae7fc2708ea41133307e4b4eed82e2be8601db77ad58ca9d9bf800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0464e703eae7fc2708ea41133307e4b4eed82e2be8601db77ad58ca9d9bf800->enter($__internal_c0464e703eae7fc2708ea41133307e4b4eed82e2be8601db77ad58ca9d9bf800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb078b7c7dd4b74d2cafbb1c822d9beac3c888c8b8ef08d186a69cd376588469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb078b7c7dd4b74d2cafbb1c822d9beac3c888c8b8ef08d186a69cd376588469->enter($__internal_bb078b7c7dd4b74d2cafbb1c822d9beac3c888c8b8ef08d186a69cd376588469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
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
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_inbox");
        echo "\" class=\"list-group-item\"><span class=\"fa fa-inbox\"></span> Inbox <span class=\"badge badge-success\">";
        echo twig_escape_filter($this->env, (isset($context["newMessages"]) ? $context["newMessages"] : $this->getContext($context, "newMessages")), "html", null, true);
        echo "</span></a>
                                <!-- <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-star\"></span> Starred <span class=\"badge badge-warning\">6</span></a> -->
                                <a href=\"";
        // line 29
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
        // line 53
        if ($this->getAttribute($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "createdBy", array()), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "createdBy", array()), "photo", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        }
        echo "\" class=\"panel-title-image\" alt=\"John Doe\"/>
                                    <h3 class=\"panel-title\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "createdBy", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "createdBy", array()), "prenom", array()), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "createdBy", array()), "email", array()), "html", null, true);
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
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "subject", array()), "html", null, true);
        echo " <small class=\"pull-right text-muted\"><span class=\"fa fa-clock-o\"></span> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "createdAt", array()), "F jS \\a\\t g:ia"), "html", null, true);
        echo "</small></h3>
                                ";
        // line 64
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "messages", array()), 0, array(), "array"), "body", array());
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
        
        $__internal_bb078b7c7dd4b74d2cafbb1c822d9beac3c888c8b8ef08d186a69cd376588469->leave($__internal_bb078b7c7dd4b74d2cafbb1c822d9beac3c888c8b8ef08d186a69cd376588469_prof);

        
        $__internal_c0464e703eae7fc2708ea41133307e4b4eed82e2be8601db77ad58ca9d9bf800->leave($__internal_c0464e703eae7fc2708ea41133307e4b4eed82e2be8601db77ad58ca9d9bf800_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a8d435dd8d79556019c3f43a6e13e1aeebc7fe380f3bd01ab3ea65dc8086181a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d435dd8d79556019c3f43a6e13e1aeebc7fe380f3bd01ab3ea65dc8086181a->enter($__internal_a8d435dd8d79556019c3f43a6e13e1aeebc7fe380f3bd01ab3ea65dc8086181a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cd2dcaaf456febe72865625b5f1137141cacbbe7b658f72e26d317181df13b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2dcaaf456febe72865625b5f1137141cacbbe7b658f72e26d317181df13b59->enter($__internal_cd2dcaaf456febe72865625b5f1137141cacbbe7b658f72e26d317181df13b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "    <script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/summernote/summernote.js"), "html", null, true);
        echo "\"></script>  
    <script type='text/javascript' src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tagsinput/jquery.tagsinput.min.js"), "html", null, true);
        echo "\"></script> 
    <script type='text/javascript' src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script> 
    <script type='text/javascript' src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-file-input.js"), "html", null, true);
        echo "\"></script>
       <script>
        \$('.active').removeClass('active');
        \$('.msg').addClass('active');
    </script>           

";
        
        $__internal_cd2dcaaf456febe72865625b5f1137141cacbbe7b658f72e26d317181df13b59->leave($__internal_cd2dcaaf456febe72865625b5f1137141cacbbe7b658f72e26d317181df13b59_prof);

        
        $__internal_a8d435dd8d79556019c3f43a6e13e1aeebc7fe380f3bd01ab3ea65dc8086181a->leave($__internal_a8d435dd8d79556019c3f43a6e13e1aeebc7fe380f3bd01ab3ea65dc8086181a_prof);

    }

    public function getTemplateName()
    {
        return ":message:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 131,  227 => 130,  223 => 129,  218 => 128,  209 => 127,  138 => 64,  132 => 63,  116 => 54,  108 => 53,  81 => 29,  74 => 27,  51 => 6,  42 => 5,  32 => 3,  20 => 1,  19 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'ROLE_PARENT' in app.user.roles 
    ? 'baseParent.html.twig' 
    : 'base2.html.twig' %}

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
                                    <img src=\"{% if thread.createdBy.photo %}{{asset('uploads/photos/'~ thread.createdBy.photo)}}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" class=\"panel-title-image\" alt=\"John Doe\"/>
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
       <script>
        \$('.active').removeClass('active');
        \$('.msg').addClass('active');
    </script>           

{% endblock %}", ":message:show.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/message/show.html.twig");
    }
}
