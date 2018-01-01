<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_279955095b0c236005974bd39fb4e32819531b67eb8b081a61f46ece6bb5b899 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ab1373a80eb99048a26219b8ad9c06a7efd6001ea54d364cf4edda5383cb8b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ab1373a80eb99048a26219b8ad9c06a7efd6001ea54d364cf4edda5383cb8b7->enter($__internal_4ab1373a80eb99048a26219b8ad9c06a7efd6001ea54d364cf4edda5383cb8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_2216c270689f8997414dc400a91f80cf04fef277877ce4d656e79dcc7a3b0309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2216c270689f8997414dc400a91f80cf04fef277877ce4d656e79dcc7a3b0309->enter($__internal_2216c270689f8997414dc400a91f80cf04fef277877ce4d656e79dcc7a3b0309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_4ab1373a80eb99048a26219b8ad9c06a7efd6001ea54d364cf4edda5383cb8b7->leave($__internal_4ab1373a80eb99048a26219b8ad9c06a7efd6001ea54d364cf4edda5383cb8b7_prof);

        
        $__internal_2216c270689f8997414dc400a91f80cf04fef277877ce4d656e79dcc7a3b0309->leave($__internal_2216c270689f8997414dc400a91f80cf04fef277877ce4d656e79dcc7a3b0309_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
