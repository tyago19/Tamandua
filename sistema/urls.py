from django.conf.urls import patterns, url

urlpatterns = patterns('sistema.views',
    url(r'^$', 'index'),
    url(r'^saque+/*', 'saque'),
)

urlpatterns += patterns('',
    url(r'^media/(.*)$', 'django.views.static.serve', {'document_root': 'sistema/templates/sistema/media'})
)
