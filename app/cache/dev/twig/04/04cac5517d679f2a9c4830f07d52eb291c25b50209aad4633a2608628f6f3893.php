<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_2d5ada7f98928a74571f24a8c95ccd9d23714e1cf0ea8ecae06dc7d1c123d508 extends Twig_Template
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
        $__internal_73295e26d7ceee8dc17ca15f015ba64dc414500f61a3c6efd7539c2a9273c6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73295e26d7ceee8dc17ca15f015ba64dc414500f61a3c6efd7539c2a9273c6b4->enter($__internal_73295e26d7ceee8dc17ca15f015ba64dc414500f61a3c6efd7539c2a9273c6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_73295e26d7ceee8dc17ca15f015ba64dc414500f61a3c6efd7539c2a9273c6b4->leave($__internal_73295e26d7ceee8dc17ca15f015ba64dc414500f61a3c6efd7539c2a9273c6b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/gaudyk/PhpstormProjects/carmex/carm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
