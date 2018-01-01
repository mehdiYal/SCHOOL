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
        $__internal_5d2bb5ebbcda55099a1c9048ad204fbe3b6245012348ce6e906036a98f66f6ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d2bb5ebbcda55099a1c9048ad204fbe3b6245012348ce6e906036a98f66f6ac->enter($__internal_5d2bb5ebbcda55099a1c9048ad204fbe3b6245012348ce6e906036a98f66f6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":message:show.html.twig"));

        $__internal_3f7fad708dbd97b71bcc448f66595de17c06b113162a61810a63468ebdeaa43f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7fad708dbd97b71bcc448f66595de17c06b113162a61810a63468ebdeaa43f->enter($__internal_3f7fad708dbd97b71bcc448f66595de17c06b113162a61810a63468ebdeaa43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":message:show.html.twig"));

        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d2bb5ebbcda55099a1c9048ad204fbe3b6245012348ce6e906036a98f66f6ac->leave($__internal_5d2bb5ebbcda55099a1c9048ad204fbe3b6245012348ce6e906036a98f66f6ac_prof);

        
        $__internal_3f7fad708dbd97b71bcc448f66595de17c06b113162a61810a63468ebdeaa43f->leave($__internal_3f7fad708dbd97b71bcc448f66595de17c06b113162a61810a63468ebdeaa43f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d74865c9c0d30710d73b9464f6ab4979b8d2b4bddb9cd6de07d8a633daf01c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d74865c9c0d30710d73b9464f6ab4979b8d2b4bddb9cd6de07d8a633daf01c26->enter($__internal_d74865c9c0d30710d73b9464f6ab4979b8d2b4bddb9cd6de07d8a633daf01c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_292c171c66c0ba5f9f0a6a805bf6174a1ff55b65c10b6c16148ffeb1455c5c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292c171c66c0ba5f9f0a6a805bf6174a1ff55b65c10b6c16148ffeb1455c5c8f->enter($__internal_292c171c66c0ba5f9f0a6a805bf6174a1ff55b65c10b6c16148ffeb1455c5c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_292c171c66c0ba5f9f0a6a805bf6174a1ff55b65c10b6c16148ffeb1455c5c8f->leave($__internal_292c171c66c0ba5f9f0a6a805bf6174a1ff55b65c10b6c16148ffeb1455c5c8f_prof);

        
        $__internal_d74865c9c0d30710d73b9464f6ab4979b8d2b4bddb9cd6de07d8a633daf01c26->leave($__internal_d74865c9c0d30710d73b9464f6ab4979b8d2b4bddb9cd6de07d8a633daf01c26_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fb44eb2b5da9804eedcce55c21e598a86038d90423ce6a885ba2f281c7b44e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb44eb2b5da9804eedcce55c21e598a86038d90423ce6a885ba2f281c7b44e7b->enter($__internal_fb44eb2b5da9804eedcce55c21e598a86038d90423ce6a885ba2f281c7b44e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6902e002baa20766370b7b53341b070d0ae6b0c0b75ed163b7f5936c3bde8c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6902e002baa20766370b7b53341b070d0ae6b0c0b75ed163b7f5936c3bde8c25->enter($__internal_6902e002baa20766370b7b53341b070d0ae6b0c0b75ed163b7f5936c3bde8c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6902e002baa20766370b7b53341b070d0ae6b0c0b75ed163b7f5936c3bde8c25->leave($__internal_6902e002baa20766370b7b53341b070d0ae6b0c0b75ed163b7f5936c3bde8c25_prof);

        
        $__internal_fb44eb2b5da9804eedcce55c21e598a86038d90423ce6a885ba2f281c7b44e7b->leave($__internal_fb44eb2b5da9804eedcce55c21e598a86038d90423ce6a885ba2f281c7b44e7b_prof);

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
