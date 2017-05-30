<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_5eda0dd662d65a1341a6a5e3ff1d9fed2b478cca4803a19a6063646fe6e967f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62d1e671aa712f62e6e037094f874a838babf632b37281f2a4a65032979bb73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d1e671aa712f62e6e037094f874a838babf632b37281f2a4a65032979bb73f->enter($__internal_62d1e671aa712f62e6e037094f874a838babf632b37281f2a4a65032979bb73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62d1e671aa712f62e6e037094f874a838babf632b37281f2a4a65032979bb73f->leave($__internal_62d1e671aa712f62e6e037094f874a838babf632b37281f2a4a65032979bb73f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7661c1678f28d9d82a62ae7a211b3deb9250414ab0eba44d87d51d914d084982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7661c1678f28d9d82a62ae7a211b3deb9250414ab0eba44d87d51d914d084982->enter($__internal_7661c1678f28d9d82a62ae7a211b3deb9250414ab0eba44d87d51d914d084982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_7661c1678f28d9d82a62ae7a211b3deb9250414ab0eba44d87d51d914d084982->leave($__internal_7661c1678f28d9d82a62ae7a211b3deb9250414ab0eba44d87d51d914d084982_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/ewa/Workspace/AddressBook/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
